<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheckPiscicultor
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

        if(session()->has('LoggedPropietario')){
            session()->pull('LoggedPropietario');
        }

        if(!session()->has('LoggedPiscicultor') && ($request->path() != 'auth.loginPiscicultor' )){

            return redirect()->route('auth.loginPiscicultor');

        }

        if(session()->has('LoggedPiscicultor') && ($request->path() == 'auth.loginPiscicultor' )){

            return back();

        }

        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma', 'no-cache')
                              ->header('Expires', 'Sat 01 Jan 1990 00:00:00');
    }
}
