<?php


namespace App\Exceptions;

use Exception;
use Throwable;

class CustomGrantException extends Exception
{

    /**
     * Invalid request error.
     *
     * @return Throwable   $previous  Previous exception
     *
     */
    public static function invalidCustomGrantVerifier(): Throwable
    {

        return Throwable::class(null);
    }

    public static function invalidCustomGrant()
    {

    }

}
