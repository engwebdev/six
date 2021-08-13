<?php


//namespace App\Auth\Grants\UserProviderExample;
//namespace App\Passport;
namespace App\Sk\Passport;


use App\User;
use Psr\Http\Message\ServerRequestInterface;
use Sk\Passport\UserProvider;

class AcmeUserProvider extends UserProvider
{
    /**
     * {@inheritdoc}
     */
    public function validate(ServerRequestInterface $request)
    {
        // It is not necessary to validate the "grant_type", "client_id",
        // "client_secret" and "scope" expected parameters because it is
        // already validated internally.

        $this->validateRequest($request, [
            'acme_id' => ['required', 'integer', 'min:1'],
            'acme_name' => ['required', 'string', 'min:1'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function retrieve(ServerRequestInterface $request)
    {
        $inputs = $this->only($request, [
            'acme_id',
            'acme_name',
        ]);

        // Here insert your logic to retrieve user entity instance

        // For example, let's assume that users table has "acme_id" column
        $user = User::where('acme_id', $inputs['acme_id'])->first();

        return $user;
    }
}
