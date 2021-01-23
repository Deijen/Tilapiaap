<?php

namespace App\Http\Controllers;
use App\Models\Cultivo;

use Illuminate\Http\Request;

class CultivoController extends Controller
{
    public function index(){

        $Cultivo = cultivo::orderby('id_cultivo', 'desc')->paginate();

        return view("cultivos.index", compact('Cultivo'));
    }

    public function show(Cultivo $Cultivo){

        return view('cultivos.show', compact('Cultivo'));
    }

    public function edit(Cultivo $Cultivo){

        return view('cultivos.edit', compact('Cultivo'));

    }

    public function update(Request $request,Cultivo $Cultivo){

        $request->validate([

            'name'=>'required',
            'description' => 'required',
            'categoria' => 'required'

        ]);

        /* $Cultivo->name = $request->name;
        $Cultivo->description = $request->description;
        $Cultivo->categoria = $request->categoria;

        $Cultivo->save(); */

        $Cultivo->update($request->all());

        return redirect()->route('Cultivos.show', $Cultivo);

    }

    public function create(){
        return view('Cultivos.create');
    }

    public function store(Request $request){

        /* $request->validate([

            'nombre'=>'required',
            'descripcion' => 'required',
            'categoria' => 'required'

        ]);

         $Cultivo = new Cultivo();

        $Cultivo->name = $request->name;
        $Cultivo->description = $request->description;
        $Cultivo->categoria = $request->categoria;

        $Cultivo->save(); */

        $Cultivo = Cultivo::create($request->all());

        return redirect()->route('Cultivos.show', $Cultivo);
        

    }


    public function destroy(Cultivo $Cultivo){

        $Cultivo->delete();

        return redirect()->route('Cultivos.index');

    }

}
