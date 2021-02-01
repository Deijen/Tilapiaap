<?php

namespace App\Http\Controllers;

use App\Models\Piscicultor;
use Illuminate\Http\Request;
use App\Models\Propietario;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    public function index(){

        $Piscicultor = Piscicultor::orderby('id_piscicultor', 'desc')->paginate();

        return view("piscicultor.index", compact('Piscicultor'));
    }

    public function show(Piscicultor $Piscicultor){

        return view('piscicultor.show', compact('Piscicultor'));
    }

    public function edit(Piscicultor $Piscicultor){

        return view('piscicultor.edit', compact('Piscicultor'));

    }

    public function update(Request $request,Piscicultor $Piscicultor){

   /*
        $request->validate([

            'name'=>'required',
            'description' => 'required',
            'categoria' => 'required'

        ]);
         */  


        /* $Piscicultor->name = $request->name;
        $Piscicultor->description = $request->description;
        $Piscicultor->categoria = $request->categoria;

        $Piscicultor->save(); */


        
        
        
        //return redirect()->route('piscicultor.show', $Piscicultor);

      //  $piscicultores = DB::table('piscicultor')->where('cultivo_id', '=' , $Cultivo->id_cultivo)->get();
        $Piscicultor->update($request->all());
        return redirect()->route('empleados.show', $Piscicultor); //<--- Se debe usar la ruta

    }

    public function create(){
        //return view('piscicultor.create');
        return view('piscicultor.create');
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


            
    // ¿Como asignar la id del propietario cuando se crea un piscicultor? 
       // $Propietario = new Propietario();

       

        
            



        $Piscicultor = Piscicultor::create($request->all());
        //$Piscicultor->propietario_id = $Propietario->id_propietario->get();
        return redirect()->route('empleados.show', $Piscicultor); 
        

    }


    public function destroy(Piscicultor $Piscicultor){

        $Piscicultor->delete();

        return redirect()->route('piscicultor.index');

    }

}
