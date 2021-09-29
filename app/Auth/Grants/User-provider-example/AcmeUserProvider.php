<?php

//namespace Tests;
namespace Sk\Tests;

use Illuminate\Foundation\Auth\User;
use League\OAuth2\Server\Exception\OAuthServerException;
use Psr\Http\Message\ServerRequestInterface;
use Sk\Passport\UserProvider;

class AcmeUserProvider extends UserProvider
{
    /**
     * Validate request parameters.
     *
     * @param ServerRequestInterface $request
     * @return void
     * @throws OAuthServerException
     */
    public function validate(ServerRequestInterface $request)
    {
        $this->validateRequest($request, [
            'acme_name' => ['required', 'string', 'min:1'],
            'acme_score' => ['required', 'integer', 'min:1'],
        ]);
    }

    /**
     * Retrieve user entity instance from request.
     *
     * @param ServerRequestInterface $request
     * @return mixed|null
     */
    public function retrieve(ServerRequestInterface $request)
    {
        $inputs = $this->only($request, [
            'acme_score',
            'acme_name',
        ]);

        // Mock Eloquent user entity
        $user = User::make()
            ->forceFill([
                'id' => $inputs['acme_score'],
                'name' => $inputs['acme_name'],
            ]);

        return $user;
    }
}
