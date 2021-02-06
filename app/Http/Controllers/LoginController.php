<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Propietario;


class LoginController extends Controller
{
 
    public function loginPropietario(){

        return view('auth.loginPropietario');

    }

    public function checkPropietario(Request $request){

        $userInfo = Propietario::where('correo', $request->correo)->first();

        if(!$userInfo){
            return back()->with('Cagasta papa');
        }
        else{
            if($userInfo->password == $request->password){

                $request->session()->put('LoggedPropietario', $userInfo->id);
                return redirect()->route('cultivos.index'); 

            }
            else{
                return back()->with('Cagasta papa con la password');
            }
        }

    }

    public function logoutPropietario(){

        if(session()->has('loggedPropietario')){
            session()->pull('LoggedPropietario');
            return redirect()->route('auth.login');
        }

    }

    public function loginPiscicultor(){

        return view('auth.loginPiscicultor');

    }

    public function checkPiscicultor(Request $request){

        $userInfo = Propietario::where('correo', $request->correo)->first();

        if(!$userInfo){
            return back()->with('Cagasta papa');
        }
        else{
            if($userInfo->password == $request->password){

                $request->session()->put('LoggedPiscicultor', $userInfo->id);
                return redirect()->route('cultivos.index'); 

            }
            else{
                return back()->with('Cagasta papa con la password');
            }
        }

    }

    public function logoutPiscicultor(){

        if(session()->has('loggedPiscicultor')){
            session()->pull('LoggedPiscicultor');
            return redirect()->route('auth.login');
        }

    }


}