<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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

        if(!session()->has('LoggedUser') && ($request->path() != 'auth/login' && $request->path() !='auth/register')){

            return redirect()->route('auth/login')->with('A donde te me vuelas :eyes: ');

        }

        if(session()->has('LoggedUser') && ($request->path() == 'auth/login' && $request->path() == 'auth/register')){

            return back();

        }
        return $next($request);
    }
}
