<?php

namespace App\Http\Controllers;

use App\Models\Piscicultor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Propietario;

/**
 * Controlador que tiene las funciones necesarias para los inicios de sesión de el propietario y los piscicultores respectivamente. 
 */
class LoginController extends Controller
{
 
    /**Función que lleva a la vista que contiene el inicio de sesión del Propietario */
    public function loginPropietario(){

        return view('auth.loginPropietario');

    }

    /**
     * Dentro de la vista del inicio de sesión del propietario, se hace uso de esta función para validar los datos. 
     * Una vez iniciado sesión, la función lleva a la vista "cultivos.index"
     */
    public function checkPropietario(Request $request){

        $request->validate([

            'correo'=>'required|email',
            'password' => 'required'

        ]); 

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

    /**Función para terminar la sesión del Propietario */
    public function logoutPropietario(){

        if(session()->has('LoggedPropietario')){
            session()->pull('LoggedPropietario');
            return redirect()->route('auth.loginPropietario');
        }

    }


    /**Función que lleva a la vista que contiene el inicio de sesión del Piscicultor */
    public function loginPiscicultor(){

        return view('auth.loginPiscicultor');

    }




    /**
     * Dentro de la vista del inicio de sesión del piscicultor, se hace uso de esta función para validar los datos.
     * Una vez iniciado sesión, esta función lleva a la vista "pisicultor.index"
     */
    public function checkPiscicultor(Request $request){

        $request->validate([

            'correo'=>'required|email',
            'password' => 'required'

        ]);

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

    /**Función para terminar la sesión del Piscicultor */
    public function logoutPiscicultor(){

        if(session()->has('LoggedPiscicultor')){
            session()->pull('LoggedPiscicultor');
            return redirect()->route('auth.loginPiscicultor');
        }

    }


}