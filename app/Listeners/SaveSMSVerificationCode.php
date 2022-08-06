<?php

namespace App\Listeners;

use App\Events\RegisterUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SaveSMSVerificationCode
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param RegisterUser $event
     * @return void
     */
    public function handle(RegisterUser $event)
    {
        $user = $event->getUser();

        $mobile_convert = base_convert(substr($user->mobile,3), 10, 36);
        $time_convert = base_convert(time(), 10, 36);
        $random_convert = base_convert(rand(37,1295), 10, 36); // after convert 2 character

        $mobile_2_last_ch = substr($mobile_convert, -2);
        $time_2_last_ch = substr($time_convert, -2);
        $random_2_last_ch = substr($random_convert, -2);


//        $user->mobile_verified_code = base_convert( intval( strval( substr( $user->mobile, 4 ) ) ) . substr(time(), -5), 10, 36 );
//        $user->mobile_verified_code = base_convert(intval( strval(substr( $user->mobile, -2 ) .substr(time(), -5) . substr( $user->mobile, -4, 2 ) ) ), 10, 36 );
//        $user->mobile_verified_code = intval(strval(substr(time(), -5)));
//        $user->mobile_verified_code = 'L' . $user->mobile_verified_code;
//        $user->mobile_verified_code = (substr($user->mobile_verified_code, -5));

        $user->mobile_verified_code = $random_2_last_ch . $mobile_2_last_ch . $time_2_last_ch;
        $user->mobile_verified_code_expire_time = date( 'Y-m-d H:i:s', 360 + time() );

        $user->save();
    }
}
