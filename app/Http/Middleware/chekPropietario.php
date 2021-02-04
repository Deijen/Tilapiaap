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
    public function handle(Request $request, Closure $next)
    {
        echo "el middleware se está aplicando a esta ruta";
        return $next($request);
    }
}
