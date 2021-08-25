<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use SoftDeletes;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];





    /****************************************************************/
    /// implements PhoneVerificationCodeGrantUserInterface
    /**
     * Find or create a user by phone number
     *
     * @param $phoneNumber
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function findOrCreateForPassportVerifyCodeGrant($phoneNumber)
    {
        // If you need to automatically register the user.
        return static::firstOrCreate(['mobile' => $phoneNumber]);

        // If the phone number is not exists in users table, will be fail to authenticate.
        // return static::where('mobile', '=', $phoneNumber)->first();
    }

    /**
     * Check the verification code is valid.
     *
     * @param $verificationCode
     * @return boolean
     */
    public function validateForPassportVerifyCodeGrant($verificationCode)
    {
        // Check verification code is valid.
        // return \App\Code::where('mobile', $this->mobile)->where('code', '=', $verificationCode)->where('expired_at', '>', now()->toDatetimeString())->exists();
        return true;
    }

}
