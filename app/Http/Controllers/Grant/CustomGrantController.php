<?php

namespace App\Http\Controllers\Grant;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomServerRequest;
use Defuse\Crypto\Crypto;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


use Illuminate\Support\Facades\Http;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

//use Route;
//use Symfony\Component\Routing\Route;
//use Symfony\Component\Routing\Annotation\Route;

use Laravel\Passport\Exceptions\OAuthServerException;
use Laravel\Passport\Http\Controllers\HandlesOAuthErrors;
use Laravel\Passport\TokenRepository;
use Lcobucci\JWT\Parser as JwtParser;
use League\OAuth2\Server\AuthorizationServer;
use Nyholm\Psr7\Response as Psr7Response;
use Psr\Http\Message\ServerRequestInterface;
use Laravel\Passport\Http\Controllers\AccessTokenController as acl;
use Illuminate\Support\Facades\Request as RequestFacade;
use Laravel\Passport\Token;
use Laravel\Passport\Client;
//use Lcobucci\JWT\Parser;

use Lcobucci\JWT\Encoding\JoseEncoder;
use Lcobucci\JWT\Token\Parser;

//class CustomGrantController extends AccessTokenController {
class CustomGrantController extends Controller {
    use HandlesOAuthErrors;

    /**
     * @param ServerRequestInterface $request
     * @return Response
     */
    public function issueToken(Request $request)
    {

        $tokenResponse = acl::issueToken( $request );
//        try
//        {
//            $tokenResponse = acl::issueToken($request);
//
//            return Response::json(
//                array ($tokenResponse)
//            );
//        }
//        catch (Exception $e)
//        {
//            ////return error message
//        }
        return $tokenResponse;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////


    /**
     * @OA\Post(
     * path="/api/newTokenByRefreshToken",
     * operationId="newTokenByRefreshToken",
     * tags={"Authorization By Token"},
     * summary="helper method for getting tokens AND list of all errors for api",
     * description="helper method for getting tokens by 'Refresh Token'",
     *
     *     @OA\Parameter(
     *         name="category_name",
     *         in="query",
     *         description="Tags to filter by",
     *         required=false,
     *         @OA\Schema(
     *           type="array",
     *           @OA\Items(type="string"),
     *         ),
     *         style="form"
     *     ),
     *
     *
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"refresh_token"},
     *               @OA\Property(property="refresh_token", type="string", example="very long string : jwt token", format="string", description="very long string : jwt token"),
     *          ),
     *
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"refresh_token"},
     *               @OA\Property(property="refresh_token", type="string", example="very long string : jwt token", format="string", description="very long string : jwt token"),
     *
     *            ),
     *        ),
     *    ),
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
     *              @OA\Property(property="refresh_token", type="string", example="string of refresh token"),
     *          ),
     *      ),
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
     *

     *
     * ),
     *
     */
    /**
     * @param ServerRequestInterface $request
     *
     * @param $
     * @return ResponseFactory|Response
     */
    public function newTokenByRefreshToken(Request $request)
    {
        $refresh_token = $request->get( 'refresh_token' );
        $app_key = env( 'APP_KEY' );
        $enc_key = base64_decode( substr( $app_key, 7 ) );
//        dd($refresh_token);
        if ($refresh_token == "null" or $refresh_token == null)
        {
            return response(
                [
                    "message" => [
                        "error : Refresh Token should not be empty."
                    ],
                ] );
//            $crypto =
        }
        else
        {
            $crypto = Crypto::decryptWithPassword( $refresh_token, $enc_key );
        }
        return json_decode( $crypto, true );
        //////////////////////////////////////////////////////////////
//        $bearerToken = $request !== null ? $request->bearerToken() : RequestFacade::bearerToken();
        $bearerToken = $request->request->get( 'refresh_token' );
//        dd($bearerToken);
        $TokenId = (new Parser( new JoseEncoder() ))->parse( $bearerToken )->claims()->all();
        return $TokenId;
//        $parsedJwt = (new Parser())->parse($bearerToken);
//
//        if ($parsedJwt->hasHeader('jti')) {
//            $tokenId = $parsedJwt->getHeader('jti');
//        } elseif ($parsedJwt->hasClaim('jti')) {
//            $tokenId = $parsedJwt->getClaim('jti');
//        } else {
//            Log::error('Invalid JWT token, Unable to find JTI header');
//            return null;
//        }
//
//        $clientId = Token::find($tokenId)->client->id;
//        return $clientId;
        /////////////////////////////////
        $request->request->add(
            [
                "grant_type" => "refresh_token",
                "client_id" => "2",
                "client_secret" => "5hCidhzkLl02h5SMTgBx4k3v8WP8aag79BILkysD",
            ]
        );

        $tokenRequest = $request->create( '/api/v1/token', 'POST', $request->all() );
        $response = app()->handle( $tokenRequest );

        return response( ["message" => [$tokenRequest, $request->request->all()]] );


        return $response;

//        return $this->withErrorHandling(function () use ($request) {
//            return $this->convertResponse(
//                $this->server->respondToAccessTokenRequest($request, new Psr7Response)
//            );
//        });
//        return response( ["message" => "Bad request"], 400 );
    }

    /**
     * @OA\Post(
     * path="/api/newTokenByOldToken",
     * operationId="newTokenByOldToken",
     * tags={"Authorization By Token"},
     * summary="helper method for getting tokens. this method removed",
     * description="helper method for getting tokens by 'Old Token'",
     *
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *               required={"old_access_token"},
     *               @OA\Property(property="old_access_token", type="string", example="very long string : jwt token", format="string", description="very long string : jwt token"),
     *          ),
     *
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"old_access_token"},
     *               @OA\Property(property="old_access_token", type="string", example="very long string : jwt token", format="string", description="very long string : jwt token"),
     *
     *            ),
     *        ),
     *    ),
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
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     *
     */
    /**
     * @param ServerRequestInterface $request
     *
     * @return ResponseFactory|Response
     * @throws OAuthServerException
     */
    public function newTokenByOldToken(ServerRequestInterface $request)
    {
        return $this->withErrorHandling( function () use ($request) {
            return $this->convertResponse(
                $this->server->respondToAccessTokenRequest( $request, new Psr7Response )
            );
        } );
//        return response( ["message" => "Bad request"], 400 );
    }
}
