<?php

namespace App\Http\Controllers\Grant;

use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AccessTokenController as AccessTokenController;
use Illuminate\Http\Request;
use Nyholm\Psr7\Response as Psr7Response;
use Psr\Http\Message\ServerRequestInterface;

class CustomAccessTokenController extends AccessTokenController
{
    /**
     * Authorize a client to access the user's account.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return \Illuminate\Http\Response
     */
    public function customIssueToken(ServerRequestInterface $request)
    {


//        dd(json_decode($request->getBody(), true));
        $httpRequest = request();
        $rawBody = (string) $request->getBody();
        $parsedBody = json_decode($rawBody, false);

//        var_dump(json_encode($parsedBody, true));
//        return response()->json(json_decode($parsedBody));
//        dd($parsedBody->verification_code);
//        $request->grant_type = $parsedBody->grant_type;
//        dd($request->getParsedBody($parsedBody));
        $arr = [
            "phone" => $parsedBody->phone,
            "verification_code" => "927068",
            "grant_type" => "custom_grant",
            "client_id" => "93eb7dcd-a3d5-4a1f-9a15-2134874ba847",
            "client_secret" => "Ap0YpJWZCGQzjFXLoMKQjLrFfZ51CbMZEFVTUHYG",
        ];
//        $request = Request::create( 'http://127.0.0.1:8001/api/v1/token', 'Post', $arr );
//        $response = Route::dispatch( $request );

//        dd($response);
//        $request->withParsedBody($arr);
        $request->phone = $parsedBody->phone;
        $request->verification_code = $parsedBody->verification_code;
        $request->grant_type = $parsedBody->grant_type;
        $request->client_id = $parsedBody->client_id;
        $request->client_secret = $parsedBody->client_secret;
//        dd($this->issueToken($request));
//        $request->merge(  ['grant_type' => 'custom_grant']);
//            [
//                'birthday' => implode( '-', [
//                    $request->birth_year,
//                    $request->birth_month,
//                    $request->birth_date,
//                ]),
//            ]
//        );
//        ("grant_type" , "phone_verification_code");
        dd($request);
//        dd($request->getParsedBody()['username']);
        if ($parsedBody->grant_type == 'phone_verification_code') {
            // 2.
//            $user = \App\User::where('email', $httpRequest->username)->first();
dd($request);
            // Perform your validation here

            // If the validation is successfull:
            return $this->issueToken($request);
        }
//        dd($request->getParsedBody()['phone']);
//    parent::issueToken($request);
    }
}
