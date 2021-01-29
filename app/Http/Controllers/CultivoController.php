<?php

namespace App\Http\Controllers;
use App\Models\Cultivo;

use Illuminate\Http\Request;

class CultivoController extends Controller
{
    public function index(){
        /**
         * NOTA: Para pasar variables se hace por el método compact. 
         * NOTA: las funciones que reciben métodos en estos controladores, corregirlos en el diagrama de clase
         */

        $Cultivo = Cultivo::orderby('id_cultivo', 'desc')->paginate();

        return view("cultivos.index", compact('Cultivo'));
    }

    public function show(Cultivo $Cultivo){

        return view('cultivos.show', compact('Cultivo'));
    }

    public function edit(Cultivo $Cultivo){

        return view('cultivos.edit', compact('Cultivo'));

    }

    public function update(Request $request,Cultivo $Cultivo){

       

        /* $Cultivo->name = $request->name;
        $Cultivo->description = $request->description;
        $Cultivo->categoria = $request->categoria;

        $Cultivo->save(); */

        $Cultivo->update($request->all());

        return redirect()->route('cultivos.show', $Cultivo);

    }

    public function create(){
        return view('cultivos.create');
    }

    public function store(Request $request){

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

        $Cultivo = Cultivo::create($request->all());

        return redirect()->route('cultivos.show', $Cultivo);
        

    }


    public function destroy(Cultivo $Cultivo){

        $Cultivo->delete();

        return redirect()->route('cultivos.index');

    }

}
