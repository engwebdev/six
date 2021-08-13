<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\Warning;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (MyException $e) {
            //
        });

        $this->renderable(function (MyException $e, $request) {
//            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Record not found.'
                ], 404);
//            }
        });

/******************** main self method *******************/
//          ModelNotFoundException
////        $this->renderable(function (ModelNotFoundException $e, Request $request) {
//        $this->renderable(function (NotFoundHttpException $e, Request $request) {
////            dd($e);
////            dd($this->prepareException($e));
////            dd($request);
//            if ($request->wantsJson()){
//                $e = $this->prepareException($e);
//                return response([
//                    'message' => $e->getMessage()
//                ], $e->getStatusCode());
//            }
//
//            return response()->json([
//                'error' => 'Resource not found'
//            ], 404);
//        });

/******************** laravel method *******************/
        $this->reportable(function (Throwable $e) {
            //
        });

/*************** i add to laravel method ****************/
        $this->renderable(function (Throwable $e) {
            //
        });
    }
}
