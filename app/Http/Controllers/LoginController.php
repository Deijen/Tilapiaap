<?php

namespace App\Http\Controllers;

use App\Models\Piscicultor;
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
            return back()->with('error');
        }
        else{
            if($userInfo->password == $request->password){
                $request->session()->put('LoggedPropietario', $userInfo->id_propietario);
                return redirect()->route('cultivos.index'); 

            }
            else{
                return back()->with('error');
            }
        }

    }

    public function logoutPropietario(){

        if(session()->has('LoggedPropietario')){
            session()->pull('LoggedPropietario');
            return redirect()->route('auth.loginPropietario');
        }

    }

    public function loginPiscicultor(){

        return view('auth.loginPiscicultor');

    }




    public function checkPiscicultor(Request $request){

        $userInfo = Piscicultor::where('correo', $request->correo)->first();

        if(!$userInfo){
            return back()->with('error');
        }
        else{
            if($userInfo->password == $request->password){

                $request->session()->put('LoggedPiscicultor', $userInfo->id_piscicultor);
                return redirect()->route('piscicultor.index'); 

            }
            else{
                return back()->with('error');
            }
        }

    }

    public function logoutPiscicultor(){

        if(session()->has('LoggedPiscicultor')){
            session()->pull('LoggedPiscicultor');
            return redirect()->route('auth.loginPiscicultor');
        }

    }


}