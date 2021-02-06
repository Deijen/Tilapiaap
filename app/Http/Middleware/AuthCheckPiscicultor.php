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
        if(!session()->has('LoggedPiscicultor') && ($request->path() != '/auth/loginPiscicultor' && $request->path() !='auth/register')){

            return redirect()->route('auth/loginPiscicultor')->with('A donde te me vuelas :eyes: ');

        }

        if(session()->has('LoggedPiscicultor') && ($request->path() == '/auth/loginPiscicultor' )){

            return back();

        }

        return $next($request);
    }
}
