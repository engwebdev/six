<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Hash;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    /**
     * @OA\Post(
     * path="/api/register",
     * operationId="Register",
     * tags={"Register"},
     * summary="User Register",
     * description="User Register here",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"name","email", "password", "password_confirmation"},
     *               @OA\Property(property="name", type="text"),
     *               @OA\Property(property="email", type="text"),
     *               @OA\Property(property="password", type="password"),
     *               @OA\Property(property="password_confirmation", type="password")
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=201,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register( Request $request )
    {
        $validated = $request->validate( [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'mobile' => 'required',
            ]
        );

        $data = $request->all();
        $data['password'] = Hash::make( $data['password'] );
        $user = User::create( $data );
        $success['token'] = $user->createToken( 'authToken' )->accessToken;
        $success['name'] = $user->name;
        return response()->json( [ 'success' => $success ] );
    }

    /**
     * @OA\Post(
     * path="/api/userLogin",
     * operationId="authLogin",
     * tags={"userLogin"},
     * summary="User Login",
     * description="Login User Here",
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *              @OA\Property(property="email", type="string", format="email", example="admin@admin.com"),
     *              @OA\Property(property="password", type="string", format="password", example="123456789"),
     *         ),
     *    ),
     *      @OA\Response(
     *          response=201,
     *          description="userLogin Successfully",
     *          @OA\JsonContent()
     *       ),
     *
     *
     *
     *      @OA\Response(
     *          response=200,
     *          description="userLogin Successfully",
     *
     *          @OA\JsonContent(
     *              @OA\Property(property="token", type="string", example="value of token"),
     *              )
     *      ),
     *
     *
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *
     *
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     * @param Request $request
     * @return string
     */
    //  * @return \Illuminate\Http\JsonResponse
    public function userLogin( Request $request )
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
            return response( [ 'errors' => 'Incorrect Details. Please try again' ], 422 );
        }

        if (!auth()->check())
        {
            return response( [ 'errors' => 'Incorrect Details. Please try again' ], 422 );
        }

        if ($validator->fails())
        {
            return response( [ 'errors' => $validator->errors()->all() ], 422 );
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
                $response = [ 'token' => $token ];
                return response( $response, 200 );
            }
            else
            {
                $response = [ "message" => "Password mismatch" ];
                return response( $response, 422 );
            }
        }
        else
        {
            $response = [ "message" => 'User does not exist' ];
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

    /*
     * security={
     *  {"passport": {}},
     */
    /**
     * @OA\Get(path="/api/userLogout",
     *   tags={"userLogout"},
     *   summary="Get the details of an authenticated userLogout",
     *   description="",
     *   operationId="getUserLogout",
     *      security={{"bearerAuth":{}}},
     *
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",
     *
     *     @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="logout Successfully")
     *        )
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
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */
    /**
     * @param Request $request
     * @return string
     */
    //  * @return \Illuminate\Http\JsonResponse
    public function userLogout( Request $request )
    {
        if ($request->user()->token()->revoke())
        {
            return response( [ "message" => "logout Successfully" ], 200 );
        }
        else
        {
            return response( [ "message" => "Bad request" ], 400 );
        }
    }
}
