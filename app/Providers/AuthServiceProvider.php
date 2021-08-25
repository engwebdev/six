<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Bridge\RefreshTokenRepository;
use Laravel\Passport\Passport;
use League\OAuth2\Server\AuthorizationServer;

use App\Auth\Grants\CustomGrant;

use Vineyard\Passport\CustomRequestGrant;

use Laravel\Passport\Bridge\UserRepository;

use QiuTuleng\PhoneVerificationCodeGrant\PhoneVerificationCodeGrant;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

        app(AuthorizationServer::class)->enableGrantType(
            $this->makeCustomGrant(), Passport::tokensExpireIn()
        );
//        app(AuthorizationServer::class)->enableGrantType(
//            $this->makeCustomRequestGrant(), Passport::tokensExpireIn()
//        );
//        app(AuthorizationServer::class)->enableGrantType(
//            $this->makeVerificationCodeGrant(), Passport::tokensExpireIn()
//        );

        if (! $this->app->routesAreCached()) {
            Passport::routes(null, ['prefix' => 'api/v1']);
//            Passport::tokensExpireIn(now()->addMinutes(1));
        }
    }

    protected function makeCustomGrant()
    {
        $grant = new CustomGrant(
            $this->app->make(RefreshTokenRepository::class)
        );

        $grant->setRefreshTokenTTL(Passport::refreshTokensExpireIn());

        return $grant;
    }

    protected function makeCustomRequestGrant()
    {
        $grant = new CustomRequestGrant(
            $this->app->make(UserRepository::class),
            $this->app->make(RefreshTokenRepository::class)
        );

        $grant->setRefreshTokenTTL(Passport::refreshTokensExpireIn());

        return $grant;
    }

    protected function makeVerificationCodeGrant()
    {
        $grant = new PhoneVerificationCodeGrant(
            $this->app->make(UserRepository::class),
            $this->app->make(RefreshTokenRepository::class)
        );

        $grant->setRefreshTokenTTL(Passport::refreshTokensExpireIn());

        return $grant;
    }
}
