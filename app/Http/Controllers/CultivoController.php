<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCultivo;
use App\Http\Requests\StoreCurso;
use App\Models\Cultivo;
use App\Models\Piscicultor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CultivoController extends Controller
{
    public function index(){
        /**
         * NOTA: Para pasar variables se hace por el método compact. 
         * NOTA: las funciones que reciben métodos en estos controladores, corregirlos en el diagrama de clase
         */

        $Cultivo = Cultivo::orderby('id_cultivo', 'desc')->paginate();

        return view("interfazPropietario.cultivos.index", compact('Cultivo'));
    }

    public function show(Cultivo $Cultivo){

       // $piscicultores = Piscicultor::all();

        //$piscicultores = DB::select('select * from piscicultor where id_cultivo = $Cultivo = id_cultivo');

        $piscicultores = DB::table('piscicultor')->where('cultivo_id', '=' , $Cultivo->id_cultivo)->get();

       

        return view('interfazPropietario.cultivos.show', compact('Cultivo') , [ 'piscicultores' => $piscicultores]);
    }

    public function edit(Cultivo $Cultivo){

        $piscicultores = DB::table('piscicultor')->where('cultivo_id', '=' , NULL)->get();

        return view('interfazPropietario.cultivos.edit', compact('Cultivo') , [ 'piscicultores' => $piscicultores]);

    }

    public function update(Request $request,Cultivo $Cultivo){

        $Cultivo->update($request->all());

        return redirect()->route('cultivos.show', $Cultivo);

    }

    public function create(){
        return view('interfazPropietario.cultivos.create');
    }



    /**
     * La función store funciona como un insert de sql
     * 
     */
    public function store(){

        /* $request->validate([

            'nombre'=>'required',
            'descripcion' => 'required',
            'categoria' => 'required'

        ]);

         $Cultivo = new Cultivo();

        $Cultivo->cultivo_id = $request->cultivo_id;
        $Cultivo->piscicultor_id = $request->piscicultor_id;
        $Cultivo->valores = $request->valores;

        $Cultivo->save(); */

        $Cultivo = Cultivo::create();

        return redirect()->route('cultivos.index'); 
            
    }


    public function destroy(Cultivo $Cultivo){

        Piscicultor::where('cultivo_id', $Cultivo->id_cultivo)->update(['cultivo_id' => NULL]);

        $Cultivo->delete();

        return redirect()->route('cultivos.index');

    } 

   
   /*
    public function mostrarEmpleadosDisponibles(Cultivo $cultivoid){

        //$piscicultores = DB::table('piscicultor')->where('cultivo_id', '=' , $Cultivo->id_cultivo)->get();
        

        foreach ($Piscicultor as $item) {
            echo $item->Nombre;
        }
    } 
    //
    */

}
