<?php

namespace Sk\Passport;

use League\OAuth2\Server\Exception\OAuthServerException;
use Psr\Http\Message\ServerRequestInterface;

interface UserProviderInterface
{
    /**
     * Validate request parameters.
     *
     * @param ServerRequestInterface $request
     * @return void
     * @throws OAuthServerException
     */
    public function validate(ServerRequestInterface $request);

    /**
     * Retrieve user instance from request.
     *
     * @param ServerRequestInterface $request
     * @return mixed|null
     */
    public function retrieve(ServerRequestInterface $request);
}
