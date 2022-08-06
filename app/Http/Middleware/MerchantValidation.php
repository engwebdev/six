<?php

namespace App\Http\Middleware;

use Closure;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MerchantValidation
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {

            $merchant_id = $request->headers->get("merchant_id");
            $merchant = DB::table('merchant')->where('merchant_id', $merchant_id)->first();
            if ($merchant_id == $merchant->merchant_id) {
                return $next($request);
            } else {
                return response()->json(['error' => 'Forbidden.'], 403);
            }
        } catch (ErrorException $e) {
            return response()->json([
                'message' => 'Forbidden.',
                'errors' => [
                    'merchant_id' => 'merchant_id is not set in header.',
                    'exception' => $e->getMessage(),
                ]
            ], 403);
        }
    }
}
