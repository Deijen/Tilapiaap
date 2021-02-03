<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpleado;
use App\Models\Piscicultor;
use Illuminate\Http\Request;
use App\Models\Propietario;
use App\Models\Cultivo;
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

    public function update(StoreEmpleado $request,Piscicultor $Piscicultor){

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

    public function store(StoreEmpleado $request){

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

    /**
     * Función para asignar un piscicultor
     * Debe recibir un piscicultor y un cultivo
     */
    public function asignarPiscicultor(Piscicultor $id_piscicultor, Cultivo $id_cultivo){


        //$cultivoid = DB::table('cultivo')->select('id_cultivo')->get();
        //$Piscicultor = DB::select('')->
        //Piscicultor::where('id_piscicultor', $pisicicultor->id_piscicultor)->update(['cultivo_id' => $cultivo->id_cultivo]);
        //$piscicultores = DB::table('piscicultor')->where('cultivo_id', '=' , NULL)->get();
        //return $cultivo;
      //  return redirect()->route('cultivos.show', $cultivo);
      ////


        //$Piscicultor = Piscicultor::find($id_piscicultor);
       // return $Piscicultor;
        ////
        //
        //$Cultivo = Cultivo::find($id_cultivo);
        //return $Cultivo;
        //

        $id_piscicultor->cultivo_id = $id_cultivo->id_cultivo;
        //return $id_piscicultor;
        $id_piscicultor->save();
        return redirect()->route('cultivos.show', $id_cultivo); 

    }

}
