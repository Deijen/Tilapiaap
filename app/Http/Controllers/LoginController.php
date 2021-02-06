<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Propietario;


class LoginController extends Controller
{
 
    public function login(){

        return view('auth.loginPropietario');

    }

    public function check(Request $request){

        $userInfo = Propietario::where('correo', $request->correo)->first();

        if(! $userInfo){
            return back()->with('Cagasta papa');
        }
        else{
            if($userInfo->password == $request->password){

                $request->session()->put('LoggedOwner', $userInfo->id);
                return redirect()->route('cultivos.index'); 

            }
            else{
                return back()->with('Cagasta papa con la password');
            }
        }

    }

    public function logout(){

        if(session()->has('loggedUser')){
            session()->pull('LoggedUser');
            return redirect()->route('auth.login');
        }

    }


}