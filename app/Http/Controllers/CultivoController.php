<?php

namespace App\Http\Controllers;


use App\Models\Cultivo;
use App\Models\Piscicultor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

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

        $piscicultores = DB::table('piscicultor')->where('cultivo_id', '=' , $Cultivo->id_cultivo)->get();

        return view('interfazPropietario.cultivos.show', compact('Cultivo') , [ 'piscicultores' => $piscicultores]);
    }

    public function edit(Cultivo $Cultivo){

        $piscicultores = DB::table('piscicultor')->where('cultivo_id', '=' , NULL)->get();

        return view('interfazPropietario.cultivos.edit', compact('Cultivo') , [ 'piscicultores' => $piscicultores]);

    }

    public function update(Request $request,Cultivo $Cultivo){

        $request->validate([

            'costosMantenimiento'=>'integer|min:0'

        ]);

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

        $Cultivo = Cultivo::create();

        $Cultivo->intensidad = 'Extensivo';
        $Cultivo->save();

        return redirect()->route('cultivos.index'); 
            
    }


    public function destroy(Cultivo $Cultivo){

        Piscicultor::where('cultivo_id', $Cultivo->id_cultivo)->update(['cultivo_id' => NULL]);

        $Cultivo->delete();

        return redirect()->route('cultivos.index');

    } 

    public function generatePDF(Cultivo $Cultivo)
    {

        date_default_timezone_set("America/Bogota");

        $date = date(now());

        $data = [
            'title' => 'INFORME',
            'date' => date(now())
        ];
          
        $pdf = PDF::loadView('interfazPropietario.informe.show', $data, compact('Cultivo'));
    
        return $pdf->download('INFORME CULTIVO -'.$Cultivo->id_cultivo. '-'.$date. '.pdf');
    }

}
