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
     *               required={"country_name", "country_code", "mobile_phone_number"},
     *               @OA\Property(property="country_name", type="string", example="IR", format="", description="2 uppercase characters. sample => IR or EN"),
     *               @OA\Property(property="country_code", type="string", example="+98", format="int64", description="Character '+' with 1 to 3 digits. sample => +1 to +999"),
     *               @OA\Property(property="mobile_phone_number", type="integer", example="9361230099", format="number", description="digit 10 characters. sample => 9361230099"),
     *          ),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"country_name", "country_code", "mobile_phone_number"},
     *               @OA\Property(property="country_name", type="string", example="IR", format="", description="2 uppercase characters. sample => IR or EN"),
     *               @OA\Property(property="country_code", type="string", example="+98", format="int64", description="Character '+' with 1 to 3 digits. sample => +1 to +999"),
     *               @OA\Property(property="mobile_phone_number", type="integer", example="9361230099", format="number", description="digit 10 characters. sample => 9361230099"),
     *
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
     * @return \Illuminate\Http\JsonResponse
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
//                    'mobile' => ['string', 'size:13',
//                        Rule::unique( 'users', 'mobile' )->where( function ($query) use ($request) {
//                            return $query->where( 'mobile', '!=', $request->input( 'country_code' ) . $request->input( 'mobile_phone_number' ) );
//                        } ),
//                    ],
                ],
//                [
//                    'mobile_phone_number.unique:users,mobile' => 'phone number must be unique',
//                ]
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
                'mobile' => ['string', 'unique:users,mobile', 'size:13']
//                'mobile' => Rule::unique('users')->where(function ($query) use ($data) {
//                    return $query->where('mobile', $data->mobile);
//                })
            ] );

//            dd($validator);
            if ($validator->fails())
            {
                $exception = $validator->messages();
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
     *               required={"verify_code"},
     *               @OA\Property(property="verify_code", type="string", example="rg05sszlqbvz", format="string", description="unique code for verify phone number"),
     *               @OA\Property(property="country_code", type="string", example="+98", format="string", description="Character '+' with 1 to 3 digits. sample => +1 to +999"),
     *               @OA\Property(property="mobile_phone_number", type="integer", example="9361230099", format="number", description="digit 10 characters. sample => 9361230099"),
     *          ),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"verify_code"},
     *               @OA\Property(property="verify_code", type="string", example="rg05sszlqbvz", format="string", description="unique code for verify phone number"),
     *               @OA\Property(property="country_code", type="string", example="+98", format="string", description="Character '+' with 1 to 3 digits. sample => +1 to +999"),
     *               @OA\Property(property="mobile_phone_number", type="integer", example="9361230099", format="number", description="digit 10 characters. sample => 9361230099"),
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
     * @return \Illuminate\Http\JsonResponse
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
                'country_code' => ['string', 'min:2', 'max:4'],
                'mobile_phone_number' => ['required', 'numeric', 'digits:10'],
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
                    $data = [
                        "grant_type" => "custom_grant",
                        "CustomGrant" => $user->mobile,
                        "client_id" => "3",
                    ];
                    // call issueToken and get token


                    $request->request->add(
                        [
                            "grant_type" => "custom_grant",
                            "CustomGrant" => $user->mobile,
                            "client_id" => "3"
                        ]
                    );
//                    $request->request->remove('verify_code');
//                    $request->request->remove('country_code');
//                    $request->request->remove('mobile_phone_number');
//                    $obj = new CustomServerRequest($request);
//                    $obj->request = $request;
//                    dd($obj->request);
//                    $result = $obj->withParsedBody($data);

//                    $data->getParsedBody();
//                    $result = app( \Laravel\Passport\Http\Controllers\AccessTokenController::class )->issueToken( $request );

//                    $rawBody = (string) $request->getBody();

//                    dd( $result );
                    $token = $user->createToken( 'CustomGrant' )->accessToken;
                    $user->mobile_verified_at = Carbon::now();
                    $user->save();
                    return response()->json(
                        [
                            "token_type" => "Bearer",
                            "expires_in" => "31536000",
                            'access_token' => $token,
                            'refresh_token' => null,
                        ], 201 );

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
    public function userLogout(Request $request)
    {
        return response(["e" => $request, "f" => auth()->guard('api')]);
//        if ($request->user()->token()->revoke())
//        {
//            return response( ["message" => "logout Successfully"], 200 );
//        }
//        else
//        {
//            return response( ["message" => "Bad request"], 400 );
//        }
    }



    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /********************************************************************************************************************/
    /**
     * @OA\Post(
     * path="/api/userLoginByCode",
     * operationId="userLoginByCode",
     * tags={"userAuth"},
     * summary="list of all errors for api",
     * description="User Login here",
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *              @OA\Property(property="email", type="string", format="email", example="admin@admin.com",),
     *              @OA\Property(property="password", type="string", format="password", example="123456789"),
     *         ),
     *
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
     *
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=401, description="Unauthorized"),
     *      @OA\Response(response=403, description="Forbidden"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     *      @OA\Response(response=405, description="Method Not Allowed"),
     *      @OA\Response(response=406, description="Not Acceptable"),
     *      @OA\Response(response=407, description="Proxy Authentication Required"),
     *      @OA\Response(response=410, description="Resource Gone"),
     *
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *
     *      @OA\Response(response=423, description="Resource Locked"),
     *      @OA\Response(response=429, description="Too Many Requests"),
     *      @OA\Response(response=451, description="Unavailable For Legal Reasons"),
     *
     *      @OA\Response(response=500, description="Internal Server"),
     *      @OA\Response(response=502, description="Bad Gateway"),
     *      @OA\Response(response=503, description="Service Unavailable"),
     *      @OA\Response(response=504, description="Gateway Timeout"),
     *      @OA\Response(response=505, description="HTTP Version Not Supported"),
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     * )
     * @param Request $request
     * @return string
     */
    //  * @return \Illuminate\Http\JsonResponse
    public function userLoginByCode(Request $request)
    {
//        return 'test 000';

//        $validator = $request->validate([
//            'email' => 'email|required',
//            'password' => 'required'
//        ]);
//
//        if (!auth()->attempt($validator)) {
//            return response()->json(['error' => 'Unauthorised'], 401);
//        } else {
//            $success['token'] = auth()->user()->createToken('authToken')->accessToken;
//            $success['user'] = auth()->user();
//            return response()->json(['success' => $success])->setStatusCode(200);
//        }
////////////////////////////////////////////
//        $test = new AccessTokenController;
//        return $this->withErrorHandling(function () use ($request) {
//            return $this->convertResponse(
//                $this->server->respondToAccessTokenRequest($request, new Psr7Response)
//            );
//        });
////////////////////////////////////////////
        $validator = Validator::make( $request->all(), [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6',
//            'password' => 'required|string|min:6|confirmed',
            ]
        );

        auth()->attempt( [
                'email' => $request->username,
                'password' => $request->password,
            ]
        );

        $validator_2 = $request->validate( [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6',
            ]
        );

        if (!auth()->attempt( $validator_2 ))
        {
            return response( ['errors' => 'Incorrect Details. Please try again'], 422 );
        }

        if (!auth()->check())
        {
            return response( ['errors' => 'Incorrect Details. Please try again'], 422 );
        }

        if ($validator->fails())
        {
            return response( ['errors' => $validator->errors()->all()], 422 );
        }
        $user = User::where( 'email', $request->email )->first();

//        dd(auth()->user()->createToken('token-test'));
//        dd(auth()->user()->createToken('token-test'));
        $testToken = auth()->user()->createToken( 'token-test' );
//        return $testToken->accessToken;
//        dd($testToken->accessToken);
        if ($user)
        {
            if (Hash::check( $request->password, $user->password ))
            {
                $token = $user->createToken( 'Laravel Password Grant Client' )->accessToken;
//                dd($token);
                $response = ['token' => $token];
                return response( $response, 200 );
            }
            else
            {
                $response = ["message" => "Password mismatch"];
                return response( $response, 422 );
            }
        }
        else
        {
            $response = ["message" => 'User does not exist'];
            return response( $response, 422 );
        }
////////////////////////////////////////
//        $data = $request->validate([
//            'email' => 'email|required',
//            'password' => 'required'
//        ]);
//
//        if (!auth()->attempt($data)) {
//            return response(['error_message' => 'Incorrect Details.
//            Please try again']);
//        }
//
//        $token = auth()->user()->createToken('API Token')->accessToken;
//
//        return response(['user' => auth()->user(), 'token' => $token]);
    }

}
