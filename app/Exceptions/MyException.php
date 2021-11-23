<?php


namespace App\Exceptions;


use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MyException extends Exception
{

//    public function render( ...$args )
//    {
//        dd($args);
//    }

//    public function render(  )
//    {
//        dd(func_get_args());
//    }

    public function render( Request $request )
    {

    }
    /******************************/

    public function report(  )
    {
        Log::error(' My Exception ');
    }


}
