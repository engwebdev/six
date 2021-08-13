<?php


namespace App\Auth\Grants;


class CustomGrantFactory
{

    public $customGrant;
    public static function getCustomGrantVerifier( $getRequestParameter )
    {
        //
//        $this->customGrant = $getRequestParameter;
        return $getRequestParameter;
//        return;
//        return null;
//        return true;
    }

    public function verify(CustomGrant $CustomGrant )
    {
        return true;
    }

}
