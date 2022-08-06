<?php

namespace App\Http\Middleware;

use Closure;
use ErrorException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountValidation
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
            $account_id = $request->headers->get("account_id");
            $account = DB::table('accounts')->where('id', $account_id)->first();

            if ($account_id == $account->id) {
                $request->attributes->add(
                    [
                        'account_id' => $account->id,
                        'user_id' => $account->user_id,
                        'shop_id' => $account->shop_id,
                        'role_id' => $account->role_id,
                    ]
                );
                return $next($request);
            } else {
                return response()->json(['error' => 'Forbidden.'], 403);
            }
        } catch (ErrorException $e) {
            return response()->json([
                'message' => 'Forbidden.',
                'errors' => [
                    'account_id' => 'account_id is not set in header.',
                    'exception' => $e->getMessage(),
                ]
            ], 403);
        }

    }
}
