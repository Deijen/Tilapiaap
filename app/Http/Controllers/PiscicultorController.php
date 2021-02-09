<?php

namespace App\Http\Controllers;

use App\Models\Piscicultor;
use Illuminate\Http\Request;
use App\Models\Cultivo;
use App\Models\TablaAlimentacion;
use GuzzleHttp\RetryMiddleware;

class PiscicultorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['loggedPiscicultorInfo'=>Piscicultor::where('id_piscicultor', session('LoggedPiscicultor'))->first()];

        $Cultivo = Cultivo::where('id_cultivo', $data['loggedPiscicultorInfo']->cultivo_id)->first();

        return view("interfazPiscicultor.parametros.show", compact('Cultivo',), $data );
    }


    public function tablaShow(){

        $tablaAlimentacion = TablaAlimentacion::first();

        return view("interfazPiscicultor.tablaAlimentacion.show", compact('tablaAlimentacion'));

    }

    public function tablaUpdate(Request $request, TablaAlimentacion $tablaAlimentacion){

        $request->validate([
            'contenidoProteico' => 'required|integer|min:0',
            'Tamizado' => 'required',
            'tamañoParticula' => 'required|integer|min:0'
        ]);

        $tablaAlimentacion->update($request->all());

        return redirect()->route('tablaAlimentacion.show');

    }

    public function tablaEdit(TablaAlimentacion $tablaAlimentacion){

        return view("interfazPiscicultor.tablaAlimentacion.edit", compact('tablaAlimentacion'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cultivo $Cultivo)
    {
        return view("interfazPiscicultor.parametros.edit", compact('Cultivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cultivo $Cultivo)
    {
        $request->validate([
            'cantidadTilapias' => 'required|min:0|numeric',
            'estado' => 'required',
            'oxigeno' => 'required|min:0|numeric',
            'temperatura' => 'required|min:1|max:99|numeric',
            'ph' => 'required|min:0|numeric',
            'amonio' => 'required|min:0|numeric',
            'nitritos' => 'required|min:0|numeric',
            'dioxidoCarbono' => 'required|min:0|numeric',
            'fosfatos' => 'required|min:0|numeric',
            'cloruros' => 'required|min:0|numeric',
            'sulfatos' => 'required|min:0|numeric',
        ]);

        $Cultivo->update($request->all());
        return  redirect()->route('piscicultor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
