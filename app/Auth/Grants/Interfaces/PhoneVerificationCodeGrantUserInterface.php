<?php

namespace QiuTuleng\PhoneVerificationCodeGrant\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface PhoneVerificationCodeGrantUserInterface
{
    /**
     * Find or create a user by phone number
     *
     * @param $phoneNumber
     * @return Model|null
     */
    public function findOrCreateForPassportVerifyCodeGrant($phoneNumber);

    /**
     * Check the verification code is valid.
     *
     * @param $verificationCode
     * @return boolean
     */
    public function validateForPassportVerifyCodeGrant($verificationCode);
}
