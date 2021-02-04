<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $credentials = $request->only('correo', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('cultivos.index');
        }

        return back()->withErrors([
            'correo' => 'sigue intentando',
        ]);
    }
}
