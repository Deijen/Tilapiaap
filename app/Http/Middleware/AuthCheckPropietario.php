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

        if(session()->has('LoggedPiscicultor')){
            session()->pull('LoggedPiscicultor');
        }

        if(!session()->has('LoggedPropietario') && ($request->path() != 'auth/loginPropietario')){

            return redirect()->route('auth.loginPropietario')->with('A donde te me vuelas :eyes: ');

        }

        if(session()->has('LoggedPropietario') && ($request->path() == 'auth/loginPropietario')){

            return back();

        }

        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma', 'no-cache')
                              ->header('Expires', 'Sat 01 Jan 1990 00:00:00');
    }
}
