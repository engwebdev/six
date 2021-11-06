<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\PassportToken;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Permission\Traits\HasRoles;

/**
 * @mixin Builder
 */
class User extends Authenticatable
{
    use SoftDeletes;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'mobile_verified_code',
        'mobile_verified_code_expire_time',
//        'password',
//        'password',
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

    public function RoleShopUser()
    {
        return $this->hasMany(RolesShopsUsers::class);
    }

    public function shop()
    {
        return $this->belongsToMany(Shop::class, 'roles_shops_users');
    }
    /****************************************************************/


    public function shop2()
    {
        return $this->ha(RolesShopsUsers::class, '');
    }
//    /**
//     * @param $mobile
//     * @return array
//     */
//    private function createVerificationCode( $mobile)
//    {
//        $data = (object) [
//            'mobile_verified_code' => null,
//            "mobile_verified_code_expire_time" => null,
//        ];
//
//        $data->mobile_verified_code = base_convert( intval( strval( substr( $mobile, 4 ) ) ) . time(), 10, 36 );
//        $data->mobile_verified_code_expire_time = date( 'Y-m-d H:i:s', 360 + time() );
//
//        return [ "code" => $data->mobile_verified_code, "expire" => $data->mobile_verified_code_expire_time ];
//    }















    /****************************************************************/
    /// implements PhoneVerificationCodeGrantUserInterface
    /**
     * Find or create a user by phone number
     *
     * @param $phoneNumber
     * @return Model|null
     */
    public function findOrCreateForPassportVerifyCodeGrant( $phoneNumber )
    {
        // If you need to automatically register the user.
        return static::firstOrCreate( [ 'mobile' => $phoneNumber ] );

        // If the phone number is not exists in users table, will be fail to authenticate.
        // return static::where('mobile', '=', $phoneNumber)->first();
    }

    /**
     * Check the verification code is valid.
     *
     * @param $verificationCode
     * @return boolean
     */
    public function validateForPassportVerifyCodeGrant( $verificationCode )
    {
        // Check verification code is valid.
        // return \App\Code::where('mobile', $this->mobile)->where('code', '=', $verificationCode)->where('expired_at', '>', now()->toDatetimeString())->exists();
        return true;
    }

}
