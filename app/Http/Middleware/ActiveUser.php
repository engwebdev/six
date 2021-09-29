<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ActiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // todo 'mehdi' change to right response return must edited
        $response = [
            'status' => 2,
            'message' => 'Unauthorized',
        ];
//        return response()->json($response, 413);

        if (auth()->user()->disable_at) {
            return response()->json($response, 413);
//            $user = auth()->user();
//            auth()->logout();
//            return redirect()->route('login')
//                ->withError('Your account was disable at ' . $user->disable_at);
//            return $user;
        }
        return $next($request);
    }
}
