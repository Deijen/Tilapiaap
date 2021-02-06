<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
 
public function authenticate(Request $request){
    
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            return 'Autentico wapisimo';

            $request->session()->regenerate();

            return redirect()->intended(route('cultivos.index'));
        }

        return 'No autentico wapisimo'; 
    }
}