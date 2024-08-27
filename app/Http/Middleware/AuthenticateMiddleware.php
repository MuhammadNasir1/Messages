<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('user_det')) {
            return redirect('login') ;
        }

        return $next($request);
    }
}
