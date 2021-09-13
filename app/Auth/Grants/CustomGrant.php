<?php


namespace App\Auth\Grants;

use RuntimeException;
use Illuminate\Http\Request;
use App\Exceptions\CustomGrantException;

use Laravel\Passport\Bridge\User;
use League\OAuth2\Server\RequestEvent;
use App\Auth\Grants\CustomGrantFactory;
use Psr\Http\Message\ServerRequestInterface;
use League\OAuth2\Server\Grant\AbstractGrant;
use League\OAuth2\Server\Entities\UserEntityInterface;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Exception\OAuthServerException;
use League\OAuth2\Server\ResponseTypes\ResponseTypeInterface;
use League\OAuth2\Server\Repositories\RefreshTokenRepositoryInterface;
//use App\Models\User as UserMain;


class CustomGrant extends AbstractGrant
{
    /**
     * @param RefreshTokenRepositoryInterface $refreshTokenRepository
     * @throws \Exception
     */
    public function __construct(
        RefreshTokenRepositoryInterface $refreshTokenRepository
    )
    {
        $this->setRefreshTokenRepository( $refreshTokenRepository );

        $this->refreshTokenTTL = new \DateInterval( 'P1M' );
    }

    /**
     * {@inheritdoc}
     * @throws \Exception
     */
    public function respondToAccessTokenRequest(
        ServerRequestInterface $request,
        ResponseTypeInterface $responseType,
        \DateInterval $accessTokenTTL
    )
    {
        // Validate request
        $client = $this->validateClient( $request );
        $scopes = $this->validateScopes( $this->getRequestParameter( 'scope', $request ) );
        $user = $this->validateUser( $request, $client );

        // Finalize the requested scopes
        $scopes = $this->scopeRepository->finalizeScopes( $scopes, $this->getIdentifier(), $client, $user->getIdentifier() );

        // Issue and persist new tokens
        $accessToken = $this->issueAccessToken( $accessTokenTTL, $client, $user->getIdentifier(), $scopes );
        $refreshToken = $this->issueRefreshToken( $accessToken );

        // Inject tokens into response
        $responseType->setAccessToken( $accessToken );
        $responseType->setRefreshToken( $refreshToken );


        return $responseType;
    }

    /**
     *
     * @param ServerRequestInterface $request
     * @param ClientEntityInterface  $client
     * @return User|void
     * @throws OAuthServerException
     */
    protected function validateUser( ServerRequestInterface $request, ClientEntityInterface $client )
    {
        $CustomGrant = $this->getRequestParameter( 'grant_type', $request );

        if (is_null( $CustomGrant ))
        {
            throw OAuthServerException::invalidRequest( 'CustomGrant' );
        }

        $CustomGrantVerifierParam = $this->getRequestParameter( 'CustomGrant', $request );

        $CustomGrantVerifier = CustomGrantFactory::getCustomGrantVerifier(
            $this->getRequestParameter( 'CustomGrant_verifier', $request, 'BL_INTERNAL' )
        );

//        dd($CustomGrantVerifier);
        if (is_null( $CustomGrantVerifier ))
        {
            throw CustomGrantException::invalidCustomGrantVerifier();
        }

        // todo => error : Call to a member function verify() on string, verify
//        $isValidCustomGrant = $CustomGrantVerifier->verify($CustomGrant);
//        if (!$isValidCustomGrant)
//        {
//            throw CustomGrantException::invalidCustomGrant();
//        }

        $phone = $this->getRequestParameter( 'CustomGrant', $request );
        if (is_null( $phone ))
        {
            throw OAuthServerException::invalidRequest( 'CustomGrant' );
        }

        $user = $this->getUserEntityByUserCustomGrant(
            $phone,  // +989360001234
            $this->getIdentifier(),
            $client  // "client_id": "3", "client_secret": null
        );
//        dd($user);
        if ($user instanceof UserEntityInterface === false)
        {
            $RequestEvent = new RequestEvent( RequestEvent::USER_AUTHENTICATION_FAILED, $request );
            $this->getEmitter()->emit( $RequestEvent );
            throw OAuthServerException::invalidCredentials();
        }

        return $user;
    }

    /**
     * @param ServerRequestInterface $request
     * @param ClientEntityInterface  $client
     * @return User|void
     * @throws OAuthServerException
     */
    protected function validateMobile(ServerRequestInterface $request, ClientEntityInterface $client )
    {
        $CustomGrant = $this->getRequestParameter( 'CustomGrant', $request );
        if (is_null( $CustomGrant ))
        {
            throw OAuthServerException::invalidRequest( 'CustomGrant' );
        }

        $CustomGrantVerifierParam = $this->getRequestParameter( 'CustomGrant_verifier', $request );

        $CustomGrantVerifier = CustomGrantFactory::getCustomGrantVerifier(
            $this->getRequestParameter( 'CustomGrant_verifier', $request, 'BL_INTERNAL' )
        );

//        dd($CustomGrantVerifier);
        if (is_null( $CustomGrantVerifier ))
        {
            throw CustomGrantException::invalidCustomGrantVerifier();
        }

        // todo => error : Call to a member function verify() on string, verify
//        $isValidCustomGrant = $CustomGrantVerifier->verify($CustomGrant);
//        if (!$isValidCustomGrant)
//        {
//            throw CustomGrantException::invalidCustomGrant();
//        }

        $username = $this->getRequestParameter( 'username', $request );
        if (is_null( $username ))
        {
            throw OAuthServerException::invalidRequest( 'username' );
        }

        $user = $this->getUserEntityByUserCustomGrantMobile(
            $username,
            $this->getIdentifier(),
            $client
        );

        if ($user instanceof UserEntityInterface === false)
        {
            $RequestEvent = new RequestEvent( RequestEvent::USER_AUTHENTICATION_FAILED, $request );
            $this->getEmitter()->emit( $RequestEvent );
//            throw OAuthServerException::invalidCredentials();
        }

        return $user;
    }

    /**
     * @param                       $mobile
     * @param                       $grantType
     * @param ClientEntityInterface $clientEntity
     * @return User|void
     */
    private function getUserEntityByUserCustomGrant( $mobile, $grantType, ClientEntityInterface $clientEntity )
    {
        $provider = config( 'auth.guards.api.provider' );

        $model = config( 'auth.providers.' . $provider . '.model' );

        if (is_null($model))
        {
            throw new RuntimeException( 'Unable to determine authentication model from configuration.' );
        }

// $user = User::where( 'username', $username )->first();dd($user);
// $user = \App\Models\User::where( 'email', $username )->first();dd($user);
// $user = \App\Models\User->where( 'email', $username )->first();dd($user);
// $user = UserMain->where( 'email', $username )->first();dd($user);

        $user = (new $model)->where('mobile', $mobile)->first();
//        $user = (new $model)->where('mobile', $username)->first();


        if (is_null( $user ))
        {
            return ;
        }

        return new User( $user->getAuthIdentifier() );
    }


    /**
     * @param                       $mobile
     * @param                       $getIdentifier
     * @param ClientEntityInterface $client
     * @return User|void
     */
    private function getUserEntityByUserCustomGrantMobile($mobile, $getIdentifier, ClientEntityInterface $client )
    {
        $provider = config( 'auth.guards.api.provider' );

        $model = config( 'auth.providers.' . $provider . '.model' );

        if (is_null($model))
        {
            throw new RuntimeException( 'Unable to determine authentication model from configuration.' );
        }

        $user = (new $model)->where('mobile', $mobile)->first();
//        $user = (new $model)->findOrFail('mobile', $mobile)->first();

        if (is_null( $user ))
        {
            return;
        }

        return new User($user->getAuthIdentifier());
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentifier()
    {
        return 'custom_grant';
    }

}
