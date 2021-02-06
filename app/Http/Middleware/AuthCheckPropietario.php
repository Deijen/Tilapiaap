<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheckPropietario
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
        if(!session()->has('LoggedPropietario') && ($request->path() != 'auth/loginPropietario')){

            return redirect()->route('auth.loginPropietario')->with('A donde te me vuelas :eyes: ');

        }

        if(session()->has('LoggedPropietario') && ($request->path() == 'auth/loginPropietario')){

            return back();

        }

        return $next($request);
    }
}
