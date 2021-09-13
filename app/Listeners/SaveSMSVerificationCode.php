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

        $user->mobile_verified_code = base_convert( intval( strval( substr( $user->mobile, 4 ) ) ) . time(), 10, 36 );
        $user->mobile_verified_code_expire_time = date( 'Y-m-d H:i:s', 360 + time() );

        $user->save();
    }
}
