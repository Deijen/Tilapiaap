<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpleado;
use App\Models\Piscicultor;
use Illuminate\Http\Request;
use App\Models\Cultivo;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    public function index(){

        $Piscicultor = Piscicultor::orderby('id_piscicultor', 'desc')->paginate();

        return view("interfazPropietario.piscicultor.index", compact('Piscicultor'));
    }

    public function show(Piscicultor $Piscicultor){

        return view('interfazPropietario.piscicultor.show', compact('Piscicultor'));
    }

    public function edit(Piscicultor $Piscicultor){

        return view('interfazPropietario.piscicultor.edit', compact('Piscicultor'));

    }

    public function update(Request $request,Piscicultor $Piscicultor){

        $request->validate([
            'Nombre' => 'required',
            'correo' => 'required|email',
            'salario' => 'required|integer|min:0',
            'password' => 'required',
        ]);
        
        

     
        $Piscicultor->update($request->all());
        return redirect()->route('empleados.show', $Piscicultor); //<--- Se debe usar la ruta

    }

    public function create(){
        return view('interfazPropietario.piscicultor.create');
    }

    public function store(StoreEmpleado $request){
        
        $request->propietario_id = 1;

        $Piscicultor = Piscicultor::create($request->all());
        
        return redirect()->route('empleados.show', $Piscicultor); 
        

    }


    public function destroy(Piscicultor $Piscicultor){

        $Piscicultor->delete();

        return redirect()->route('cultivos.index');

    }

    /**
     * Función para asignar un piscicultor
     * Debe recibir un piscicultor y un cultivo
     */
    public function asignarPiscicultor(Piscicultor $id_piscicultor, Cultivo $id_cultivo){


        $id_piscicultor->cultivo_id = $id_cultivo->id_cultivo;
        $id_piscicultor->save();
        return redirect()->route('cultivos.show', $id_cultivo); 

    }

   


}
