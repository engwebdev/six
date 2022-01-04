<?php

namespace App\Http\Controllers\Api;

use App\Events\RegisterUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomServerRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Traits\PassportToken;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
//use Hash;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Psr\Http\Message\ServerRequestInterface;


class AuthController extends Controller {
    use PassportToken;

    //

    /**
     * @OA\Post(
     * path="/api/userRegister",
     * operationId="userRegister",
     * tags={"Register"},
     * summary="Register the user to receive the SMS verification code.",
     * description="User Register here",
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"country_name", "country_code", "mobile_phone_number", "client_type"},
     *               @OA\Property(property="country_name", type="string", example="IR", format="", description="2 uppercase characters. sample => IR or EN"),
     *               @OA\Property(property="country_code", type="string", example="+98", format="int64", description="Character '+' with 1 to 3 digits. sample => +1 to +999"),
     *               @OA\Property(property="mobile_phone_number", type="integer", example="9361230099", format="number", description="digit 10 characters. sample => 9361230099"),
     *               @OA\Property(property="client_type", type="string", example="shop", format="", description="shop for shopkeeper and customer for user"),
     *          ),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"country_name", "country_code", "mobile_phone_number", "client_type"},
     *               @OA\Property(property="country_name", type="string", example="IR", format="", description="2 uppercase characters. sample => IR or EN"),
     *               @OA\Property(property="country_code", type="string", example="+98", format="int64", description="Character '+' with 1 to 3 digits. sample => +1 to +999"),
     *               @OA\Property(property="mobile_phone_number", type="integer", example="9361230099", format="number", description="digit 10 characters. sample => 9361230099"),
     *               @OA\Property(property="client_type", type="string", example="shop", format="", description="shop for shopkeeper and customer for user"),
     *            ),
     *        ),
     *    ),
     *
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="user Login Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="user Login Successfully"),
     *              @OA\Property(
     *                      property="success",
     *                      type="object",
     *                  @OA\Property(
     *                      property="mobile",
     *                      type="array",
     *                      @OA\Items(
     *                          example="+989360001234"
     *                      ),
     *                  ),
     *              ),
     *
     *              @OA\Property(
     *                  property="NotificationsEnServer",
     *                  type="string",
     *                  example="The verification code was sent to the mobile number via SMS",
     *              ),
     *
     *          ),
     *      ),
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="user Register Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="user Register Successfully"),
     *              @OA\Property(
     *                      property="success",
     *                      type="object",
     *                  @OA\Property(
     *                      property="mobile",
     *                      type="array",
     *                      @OA\Items(
     *                          example="+989360001234"
     *                      ),
     *                  ),
     *              ),
     *
     *              @OA\Property(
     *                  property="NotificationsEnServer",
     *                  type="string",
     *                  example="The verification code was sent to the mobile number via SMS",
     *              ),
     *
     *          ),
     *      ),
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     *
     *
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="message",
     *                  type="string",
     *                  example="Integrity constraint violation",
     *              ),
     *              @OA\Property(
     *                  property="errors",
     *                  type="object",
     *                  @OA\Property(
     *                      property="mobile_phone_number",
     *                      type="array",
     *                      @OA\Items(
     *                          example="The mobile phone number field is unique."
     *                      ),
     *                  ),
     *                  @OA\Property(
     *                      property="problem",
     *                      type="array",
     *                      @OA\Items(
     *                          example="Duplicate entry mobile number"
     *                      ),
     *                  ),
     *                  @OA\Property(
     *                      property="exception",
     *                      type="array",
     *                      @OA\Items(
     *                          example="Sql exception"
     *                      ),
     *                  ),
     *              ),
     *          ),
     *       ),
     *
     *      @OA\Response(response=503, description="Servr error"),
     * )
     * @param UserRegisterRequest $request
     * @return JsonResponse
     */
    public function userRegister(UserRegisterRequest $request)
    {
        try
        {
            // for performance 3 time called from db, todo #db_optimizer
            $validated = $request->validate(
                [
                    'country_name' => ['required', 'string', 'min:2', 'max:3'],
                    'country_code' => ['required', 'string', 'min:2', 'max:4'],
                    // for performance unique time called from db, todo #db_optimizer
                    'mobile_phone_number' => ['required', 'numeric', 'digits:10'],
                    'client_type' => ['required', 'string'],
                ]

            );

            if (!$validated)
            {
                return response()->json( [
                    "message" => "Unknown server problem",
                    "errors" => [
                        "problem" => [
                            "Unknown server problem",
                        ],
                    ],
                ], 503 );
            }

            $data = [
                'mobile' => $validated['country_code'] . $validated['mobile_phone_number'],
            ];

            $validator = Validator::make( $data, [
                    'mobile' => ['string', 'unique:users,mobile', 'size:13'],
                ]
            );

//            dd($validator);
            if ($validator->fails())
            {
                /** @var exception $exception */
                $exception = $validator->messages();
//                throw $exception;
            }

//            dd($request->all(),$data,$valid);

        }
        catch (QueryException $e)
        {
            return response()->json( [
                "message" => "Unknown server problem",
                "errors" => [
                    "problem" => [
                        "Unknown server problem",
                    ],
                    "exceptions" => [
                        $e->getMessage(),
                    ],
                ],
            ], 503 );
        }

        try
        {
            // update Or Create user
            $user = User::where( 'mobile', $validated['country_code'] . $validated['mobile_phone_number'] )->first();
            if ($user !== null)
            {
                $user->update( ['mobile' => $validated['country_code'] . $validated['mobile_phone_number']] );
//                dd($user);
//                $user->guard_name = 'api';
                if ($request->post( 'client_type' ) == 'shop')
                {
                    $user->assignRole( 'shopkeeper');
                }
                elseif ($request->post( 'client_type' ) == 'customer')
                {
                    $user->assignRole( 'user' );
                }
                $responseCode = 200;
                $message = 'User Login Successfully';
                $notifications_En_Server = 'The verification code was sent to the mobile number via SMS';
                $notifications_Fa_Server = 'کد احراز هویت با پیامک به شماره موبایل ارسال شد';
            }
            else
            {
                $user = User::create( [
                    'mobile' => $validated['country_code'] . $validated['mobile_phone_number'],
                ] );
//                $user->guard_name = 'api';
//                dd($user);

                if ($request->post( 'client_type' ) == 'shop')
                {
                    $user->assignRole( 'shopkeeper' );
                }
                elseif ($request->post( 'client_type' ) == 'customer')
                {
                    $user->assignRole( 'user' );
                }
                $responseCode = 201;
                $message = 'User Register Successfully';
                $notifications_En_Server = 'The verification code was sent to the mobile number via SMS';
                $notifications_Fa_Server = 'کد احراز هویت با پیامک به شماره موبایل ارسال شد';
            }

//            $user = User::updateOrCreate(
//                [
//                    'mobile' => $validated['country_code'] . $validated['mobile_phone_number'],
//                ],
//                [
//                    'mobile' => $validated['country_code'] . $validated['mobile_phone_number'],
//                ]
//            );

            event(
                new RegisterUser( $user )
            );
            $temporarySample = $user->mobile_verified_code;

            $success['mobile'] = $user->mobile;
            return response()->json( [
                'message' => $message,
                'success' => $success,
                'NotificationsEnServer' => $notifications_En_Server,
                'NotificationsFaServer' => $notifications_Fa_Server,
                'TemporarySample' => $temporarySample,
            ], $responseCode );
        }
        catch (QueryException $e)
        {
            return response()->json( [
                "message" => "Integrity constraint violation",
                "errors" => [
                    "mobile_phone_number" => [
                        "The mobile phone number field is unique.",
                    ],
                    "problem" => [
                        "Duplicate entry mobile number",
                    ],
                    "exception" => [
                        $e->getMessage(),
                    ],
                ],
            ], 422 );

            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062)
            {
                return response()->json( ['error' => 'error 1'] );
                // we have a duplicate entry problem
            }
        }

//        $success['token'] = $user->createToken( 'authToken' )->accessToken;

//        $success['verification_code'] = $verificationCode;
//        $success['mobile'] = $user->mobile;

        return response()->json( [
            "message" => "Integrity constraint violation",
            'errors' => [
                'error' => 'Bad request',
            ],
        ], 400 );
    }

//  OA\Property(property="code_expire_time", type="string", example="2021-09-04 12:02:58", format="timestamp", description="Expiration time Verification code sent via sms"),

    /**
     * @OA\Post(
     * path="/api/userLogin",
     * operationId="authLogin",
     * tags={"User Authorization"},
     * summary="Send unique confirmation code and receive tokens.",
     * description="Login User Here",
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"verify_code", "client_type"},
     *               @OA\Property(property="verify_code", type="string", example="rg05sszlqbvz", format="string", description="unique code for verify phone number"),
     *               @OA\Property(property="country_code", type="string", example="+98", format="string", description="Character '+' with 1 to 3 digits. sample => +1 to +999"),
     *               @OA\Property(property="mobile_phone_number", type="integer", example="9361230099", format="number", description="digit 10 characters. sample => 9361230099"),
     *               @OA\Property(property="client_type", type="string", example="shop", format="", description="shop for shopkeeper and customer for user"),
     *          ),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"verify_code", "client_type"},
     *               @OA\Property(property="verify_code", type="string", example="rg05sszlqbvz", format="string", description="unique code for verify phone number"),
     *               @OA\Property(property="country_code", type="string", example="+98", format="string", description="Character '+' with 1 to 3 digits. sample => +1 to +999"),
     *               @OA\Property(property="mobile_phone_number", type="integer", example="9361230099", format="number", description="digit 10 characters. sample => 9361230099"),
     *               @OA\Property(property="client_type", type="string", example="shop", format="", description="shop for shopkeeper and customer for user"),
     *
     *            ),
     *        ),
     *    ),
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="user Login Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="token_type", type="string", example="Bearer"),
     *              @OA\Property(property="expires_in", type="integer", example="31536000"),
     *              @OA\Property(property="access_token", type="string", example="string of token"),
     *              @OA\Property(property="refresh_token", type="string", example="string of refresh token"),
     *          ),
     *      ),
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="User creation and login completed successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="token_type", type="string", example="Bearer"),
     *              @OA\Property(property="expires_in", type="integer", example="31536000"),
     *              @OA\Property(property="access_token", type="string", example="string of token"),
     *          ),
     *      ),
     * ),
     */
    /**
     * @param Request $request
     * @return JsonResponse
     */
    // * @param \Psr\Http\Message\ServerRequestInterface $request
    // * @param UserLoginRequest $request
    public function userLogin(Request $request)
    {
//        if ($request->mobile_phone_number) {}
        try
        {
            $validated = $request->validate( [
                'verify_code' => ['required'],
                'country_code' => ['string', 'nullable'],
                'mobile_phone_number' => ['numeric', 'digits:10', 'nullable'],
                'client_type' => ['required', 'string'],


//                'mobile' => ['string', 'size:13',
//                    function () use () {
//                    }

//                    Rule::unique( 'users', 'mobile' )->where( function ($query) use ($request) {
//                        return $query->where( 'mobile', '!=', $request->input( 'country_code' ) . $request->input( 'mobile_phone_number' ) );
//                    } ),
//                ],
            ] );

            $data = [
                'mobile' => $validated['country_code'] . $validated['mobile_phone_number'],
            ];
            $validator = Validator::make( $data, [
                'mobile' => ['string', 'unique:users,mobile', 'size:13'],
            ] );
            if ($validator->fails())
            {
                $exception = $validator->messages();
            }

//            dd($request->all(),$data,$valid);
//            $mobile = $request->input( 'country_code' ) . $request->input( 'mobile_phone_number' );
//            dd($mobile);
//            Validator::make( $mobile, [
//                Rule::unique( 'users', 'mobile' )->where( function ($query) use ($mobile) {
//                    return $query->where( 'mobile', '!=', $mobile);
//                } )
//            ] );

            $user = User::where( 'mobile_verified_code', $validated['verify_code'] )
//                ->where('mobile_verified_code_expire_time', '>', Carbon::now())
                ->first();

            if (!$user)
            {
                return response()->json(
                    [
                        "message" => "The requested Verification code was not found.",
                        'errors' => [
                            'error' => 'Not Found',
                        ],

                    ], 404 );
            }
            else
            {
                if ($user->mobile_verified_code_expire_time > Carbon::now())
                {
                    // generation access token and refresh token
                    // if $user->mobile_verified_at not null => update_at only
                    // if $user->mobile_verified_at null => save mobile_verified_at


                    // get token by

                    // call issueToken and get token

                    if ($request->post( 'client_type' ) == 'shop')
                    {
                        $client_id = 3;
                    }
                    else
                    {
                        $client_id = 1;
                    }

                    $request->request->add(
                        [
                            "grant_type" => "custom_grant",
                            "CustomGrant" => $user->mobile,
                            "client_id" => $client_id,
                        ]
                    );

                    $tokenRequest = $request->create( '/api/v1/token', 'POST', $request->all() );
                    $response = app()->handle( $tokenRequest );

                    /*
                                        return response()->json(
                                            [
                                                "message" => [
                                                    "token" => $tokenRequest,
                                                    "auth" => auth()->guard( 'api' ),
                                                    "server" => $request->server->all(),
                                                    "cookies" => $request->cookies->all(),
                                                    "headers" => $request->headers->all(),
                                                    "user" => $request->user(),
                    //                                "token" => $request->user()->token(),
                                                    "ReHeaders" => $response->headers->all(),
                                                    "ReOriginal" => $response->original,
                                                    "ReException" => $response->exception,
                                                    "ReResponseContent" => json_decode($response->getContent()),
                    //                                "response1" => $response->toArray(),
                    //                                "response2" => $response->get('content'),
                    //                                "response" => $response->statusCode,
                                                ],
                                            ], 403 );
                    */
                    $token = $user->createToken( 'CustomGrant' )->accessToken;
                    $user->mobile_verified_at = Carbon::now();
                    $user->save();
                    return response()->json(
                        json_decode( $response->getContent() )
                        , 201 );
                    /*
                                        return response()->json(
                                            [
                                                "token_type" => "Bearer",
                                                "expires_in" => "31536000",
                                                'access_token' => $response->access_token,
                                                'refresh_token' => $response->refresh_token,
                                            ], 201 );
                                        */
                }
                else
                {
                    return response()->json(
                        [
                            "message" => "The verified code expired",
                            'errors' => [
                                'error' => 'Forbidden',
                            ],
                        ], 403 );
                }
            }
        }
        catch (QueryException $e)
        {

        }
    }

    /*
     * security={
     *  {"passport": {}},
     */
    /**
     * @OA\Get(
     *   path="/api/userLogout",
     *   tags={"User Authorization"},
     *   summary="User Logging Out",
     *   description="user log",
     *   operationId="getUserLogout",
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",
     *
     *     @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="logout Successfully")
     *        ),
     *     ),
     *
     *
     *
     * @OA\Response(response=400, description="Bad request"),
     * @OA\Response(response=401, description="Unauthenticated",
     *
     *     @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Unauthenticated")
     *        )
     *     ),
     *
     * ),
     * @OA\Response(response=403, description="forbidden"),
     * @OA\Response(response=404, description="Resource Not Found"),
     *
     * )
     */
    /**
     * @param Request $request
     * @return string
     */
    //  * @return \Illuminate\Http\JsonResponse
    // todo edit logout mehdi
    public function userLogout(Request $request)
    {
        $response = response( [
            "result" => "data",
            "metaData" => [
                "auth" => auth()->guard( 'api' ),
                "server" => $request->server->all(),
                "cookies" => $request->cookies->all(),
                "headers" => $request->headers->all(),
                "user" => $request->user(),
                "token" => $request->user()->token(),
            ],
        ] );

        if ($request->user()->token()->revoke())
        {
            return response( [
                "message" => "logout Successfully",
                "extraResponse" => $response,

            ], 200 );
        }
        else
        {
            return response( [
                "message" => "Bad request",
                "extraResponse" => $response,
            ], 400 );
        }

    }

    /**
     * @OA\Post(
     * path="/api/v1/userAccount",
     * operationId="userAccount",
     * tags={"Profile"},
     * summary="Account set first name and last name.",
     * description="User Account here",
     *
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"firstName"},
     *               @OA\Property(property="firstName", type="string", example="firstName", format="", description="firstName"),
     *               @OA\Property(property="lastName", type="string", example="lastName", format="", description="lastName"),
     *          ),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"firstName"},
     *               @OA\Property(property="firstName", type="string", example="firstName", format="", description="firstName"),
     *               @OA\Property(property="lastName", type="string", example="lastName", format="", description="lastName"),
     *
     *            ),
     *        ),
     *    ),
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="user Login Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="user Login Successfully"),
     *              @OA\Property(
     *                      property="success",
     *                      type="object",
     *                  @OA\Property(
     *                      property="mobile",
     *                      type="array",
     *                      @OA\Items(
     *                          example="+989360001234"
     *                      ),
     *                  ),
     *              ),
     *
     *              @OA\Property(
     *                  property="NotificationsEnServer",
     *                  type="string",
     *                  example="The verification code was sent to the mobile number via SMS",
     *              ),
     *
     *          ),
     *      ),
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="user Register Successfully",
     *
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="user Register Successfully"),
     *              @OA\Property(
     *                      property="success",
     *                      type="object",
     *                  @OA\Property(
     *                      property="mobile",
     *                      type="array",
     *                      @OA\Items(
     *                          example="+989360001234"
     *                      ),
     *                  ),
     *              ),
     *
     *              @OA\Property(
     *                  property="NotificationsEnServer",
     *                  type="string",
     *                  example="The verification code was sent to the mobile number via SMS",
     *              ),
     *
     *          ),
     *      ),
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     *
     *
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="message",
     *                  type="string",
     *                  example="Integrity constraint violation",
     *              ),
     *              @OA\Property(
     *                  property="errors",
     *                  type="object",
     *                  @OA\Property(
     *                      property="mobile_phone_number",
     *                      type="array",
     *                      @OA\Items(
     *                          example="The mobile phone number field is unique."
     *                      ),
     *                  ),
     *                  @OA\Property(
     *                      property="problem",
     *                      type="array",
     *                      @OA\Items(
     *                          example="Duplicate entry mobile number"
     *                      ),
     *                  ),
     *                  @OA\Property(
     *                      property="exception",
     *                      type="array",
     *                      @OA\Items(
     *                          example="Sql exception"
     *                      ),
     *                  ),
     *              ),
     *          ),
     *       ),
     *
     *      @OA\Response(response=503, description="Servr error"),
     * )
     *
     *
     *
     *
     *
     */
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function userAccount(Request $request)
    {
        try
        {
            $validated = $request->validate( [
                'firstName' => ['required', 'string', 'min:2'],
                'lastName' => ['string', 'min:2', 'nullable'],

            ] );

            $user = User::find( auth()->id() );
            $user->first_name = $validated['firstName'];
            if (!empty( $validated['lastName'] ))
            {
                $user->last_name = $validated['lastName'];
            }
            $user->save();
            $data = [
                "userId" => $user->id,
                "firstName" => $user->first_name,
                "lastName" => $user->last_name,
                "fullName" => $user->first_name . ' ' . $user->last_name,
                "mobileNumber" => $user->mobile,
                "username" => $user->username,
                "email" => $user->email,
                "profileImageUrl" => $user->profile_photo_path,
            ];
//dd($user);

            return response()->json( [
                "message" => "Test request",
                "data" => $data,
            ], 200 );
        }
        catch (QueryException $e)
        {

        }
    }

    /**
     * @OA\Put(
     * path="/api/v1/userUpdate/{id}",
     * operationId="updateUser",
     * tags={"Profile"},
     * summary="update users. => only for user and system admin",
     * description="update users",
     *
     *
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of user",
     *         required=false,
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         example="1",
     *     ),
     *
     *
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="profile_photo",
     *                  type="string",
     *                  example="file",
     *                  format="binary",
     *                  description="file",
     *                  default="null",
     *                  nullable=true,
     *               ),
     *               @OA\Property(
     *                  property="name", type="string", example="name", description="name", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="first_name", type="string", example="first_name", description="first_name", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="last_name", type="string", example="last_name", description="last_name", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="disable", type="boolen", format="string", example="0 or 1", description="disable default false", default="null", nullable=true
     *               ),
     *         ),
     *
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               @OA\Property(
     *                  property="profile_photo",
     *                  type="string",
     *                  example="file",
     *                  format="binary",
     *                  description="file",
     *                  default="null",
     *                  nullable=true,
     *               ),
     *               @OA\Property(
     *                  property="name", type="string", example="name", description="name", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="first_name", type="string", example="first_name", description="first_name", nullable=false
     *               ),
     *               @OA\Property(
     *                  property="last_name", type="string", example="last_name", description="last_name", default="null", nullable=true
     *               ),
     *               @OA\Property(
     *                  property="disable", type="boolen", format="string", example="0", description="disable default false", default="0", nullable=true
     *               ),
     *            ),
     *         ),
     *    ),
     *
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="Update User Successfully",
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="user Updated."),
     *              @OA\Property(property="data", type="string", example="user"),
     *          ),
     *      ),
     *
     *
     *      @OA\Response(
     *          response=201,
     *          description="Update User Successfully Created",
     *          @OA\JsonContent(
     *              type="object",
     *
     *              @OA\Property(property="message", type="string", example="user Updated."),
     *              @OA\Property(property="data", type="string", example="user"),
     *          ),
     *      ),
     *
     *
     *      @OA\Response(response=503, description="Unknown server problem in user update"),
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     */
    /**
     * @param Request $request
     * @param         $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        try
        {
            $current_user_id = auth()->id();
            $user = User::findOrFail( $id );
            $validated = $request->validate(
                [
                    'name' => ['nullable', 'string', 'min:2'],
                    'first_name' => ['nullable', 'string', 'min:2'],
                    'last_name' => ['nullable', 'string', 'min:2'],
                    'username' => ['nullable', 'string', 'min:2'],
                    'profile_photo' => ['nullable', 'mimes:jpeg,png,jpg,webp,bmp'],
                    'disable_by' => ['nullable', 'string', 'min:2'],
                    'disable_at' => ['nullable', 'string', 'min:2'],
                ]
            );

            $user->name = $request->name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->username = $request->username;

            if (isset( $validated['disable'] ))
            {
                $disable_by = $current_user_id;
                if ($validated['disable'] = 1)
                {
                    $user->disable_by = $disable_by;
                    $user->disable_at = time();
                }
            }

            if (isset($validated['profile_photo']))
            {
                $profile_photo = $validated['profile_photo'];
                $profile_photo_name = $request->file( 'profile_photo' )->getClientOriginalName();
                $format = (explode( '.', $profile_photo_name ));
                $file_name_is = $format[0];
                $file_format_is = end( $format );
                $name_in_store = $file_name_is . '-' . date( 'Y-m-d', strtotime( Carbon::now() ) ) . '.' . $file_format_is;

                $profile_photo_path = $request->file( 'profile_photo' )
                    ->storeAs( 'user_id/'. $id .'_profile_' . substr($user->mobile,1), $name_in_store );


//                $user->profile_photo_path = $validated['profile_photo'];
                $user->profile_photo_path = 'shop/' . $profile_photo_path;

            }
//            else
//            {
//                $profile_photo_path = null;
//                return response()->json( [
//                    "message" => "Unknown server problem in user update",
//                    "errors" => [
//                        "problem" => [
//                            "Unknown server problem in user update",
//                        ],
//                    ],
//                ], 503 );
//            }

//            $user->profile_photo_path = $profile_photo_path;

            $user->save();

            return response()->json( [
                "message" => "user Updated",
                "data" => $user,
            ], 200 );

        }
        catch (QueryException $e)
        {

        }
    }

    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/


}
