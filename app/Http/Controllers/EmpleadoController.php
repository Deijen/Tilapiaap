<?php

namespace App\Http\Controllers;

use App\Models\Piscicultor;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){

        $Piscicultor = Piscicultor::orderby('id', 'desc')->paginate();

        return view("piscicultor.index", compact('piscicultor'));
    }

    public function show(Piscicultor $piscicultor){

        return view('Piscicultors.show', compact('Piscicultor'));
    }

    public function edit(Piscicultor $piscicultor){

        return view('Piscicultors.edit', compact('Piscicultor'));

    }

    public function update(Request $request,Piscicultor $Piscicultor){

        $request->validate([

            'name'=>'required',
            'description' => 'required',
            'categoria' => 'required'

        ]);

        /* $Piscicultor->name = $request->name;
        $Piscicultor->description = $request->description;
        $Piscicultor->categoria = $request->categoria;

        $Piscicultor->save(); */

        $Piscicultor->update($request->all());

        return redirect()->route('Piscicultors.show', $Piscicultor);

    }

    public function create(){
        return view('Piscicultors.create');
    }

    public function store(Request $request){

        /* $request->validate([

            'nombre'=>'required',
            'descripcion' => 'required',
            'categoria' => 'required'

        ]);

         $Piscicultor = new Piscicultor();

        $Piscicultor->name = $request->name;
        $Piscicultor->description = $request->description;
        $Piscicultor->categoria = $request->categoria;

        $Piscicultor->save(); */

        $Piscicultor = Piscicultor::create($request->all());

        return redirect()->route('Piscicultors.show', $Piscicultor);
        

    }


    public function destroy(Piscicultor $Piscicultor){

        $Piscicultor->delete();

        return redirect()->route('Piscicultors.index');

    }

}
