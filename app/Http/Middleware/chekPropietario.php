<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class chekPropietario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'propietario')
    {
        if(!auth()->guard($guard)->check()) {
            return redirect(url('/'));
        }

        return $next($request);

    }
}
