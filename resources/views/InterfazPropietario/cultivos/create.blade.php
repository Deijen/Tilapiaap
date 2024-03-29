@extends('layouts.plantilla')

@section('title', 'cultivos Create')

@section('content')
<h1>Pagina para crear cultivos</h1>

<form action="{{route('cultivos.store')}}" method="post"> 

    @csrf

    <br>
    <label>
        <!--La tabla de alimentación debe ser un link. Quitar el input. No va en la creacion de cultivos del propietario-->
        <a href="">Tabla de Alimentacion:</a>
        <br>
        
    </label>

    @error('tablaAlimentacion')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <br>
    <label>
        Cantidad de tilapias
        <br>
        <input type="number" name="cantidadTilapias" value="{{old('cantidadTilapias')}}">
    </label>

    @error('cantidadTilapias')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>

    <label>
        Costo de mantenimiento
        <br>
        <input type="number" name="costosMantenimiento" value="{{old('costosMantenimiento')}}">
    </label>

    @error('costosMantenimiento')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>
    <label>
        Estado
        <br>
        <input type="text" name="estado" value="{{old('estado')}}">
    </label>

    @error('estado')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>



    <!-------------------------------------------->

    <label>
        Oxigeno (ppm)
        <br>
        <input type="number" name="oxigeno" value="{{old('oxigeno')}}">
    </label>

    @error('oxigeno')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>
    <label>
        Temperatura (Centigrados)
        <br>
        <input type="number" name="temperatura" value="{{old('temperatura')}}">
    </label>

    @error('temperatura')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    
    <br>
    <br>
    <label>
        PH 
        <br>
        <input type="number" name="ph" value="{{old('ph')}}">
    </label>

    @error('ph')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>
    <label>
        Amonio (ppm)
        <br>
        <input type="number" name="amonio" value="{{old('amonio')}}">
    </label>

    @error('amonio')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>
    <label>
        Nitritos (ppm)
        <br>
        <input type="number" name="nitritos" value="{{old('nitritos')}}">
    </label>

    @error('nitritos')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>
    <label>
        Dioxido de carbono (ppm)
        <br>
        <input type="number" name="dioxidoCarbono" value="{{old('dioxidoCarbono')}}">
    </label>

    @error('dioxidoCarbono')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>
    <label>
        Fosfatos (ppm)
        <br>
        <input type="number" name="fosfatos" value="{{old('fosfatos')}}">
    </label>

    @error('fosfatos')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>
    <label>
        Cloruros (ppm)
        <br>
        <input type="number" name="cloruros" value="{{old('cloruros')}}">
    </label>

    @error('cloruros')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <br>
    <label>
        Sulfatos (ppm)
        <br>
        <input type="number" name="sulfatos" value="{{old('sulfatos')}}">
    </label>

    @error('sulfatos')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br>
    <br>
    <button type="submit">Enviar formulario</button>

</form>
    <a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
    @endsection


