@extends('layouts.interfaces')

@section('title', 'Parametros edit')

@section('content')
<div class="name_page">
    Pagina para editar parametros
</div>

<form action="{{route('piscicultor.update', $Cultivo)}}" method="post"> 

    @csrf
    @method('put')

    <div class="items">
        <label>
            Cantidad de tilapias
            <br>
            <input type="number" name="cantidadTilapias" value="{{old('cantidadTilapias', $Cultivo->cantidadTilapias)}}">
        </label>
    
        @error('cantidadTilapias')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
    
        <br>
        <label>
            Estado
            <br>
            <input type="text" name="estado" value="{{old('estado', $Cultivo->estado)}}">
        </label>
    
        @error('estado')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
    
        <br>
    
    
    
        <!-------------------------------------------->
    
        <label>
            Oxigeno (ppm) (Optimo > 4.5)
            <br>
            <input type="number" name="oxigeno" value="{{old('oxigeno', $Cultivo->oxigeno)}}">
        </label>
    
        @error('oxigeno')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
    
        <br>
        <label>
            Temperatura (Centigrados) (32 > Optimo > 28)
            <br>
            <input type="number" name="temperatura" value="{{old('temperatura', $Cultivo->temperatura)}}">
        </label>
    
        @error('temperatura')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        
        <br>
        <label>
            PH (9 > Optimo > 6.5)
            <br>
            <input type="number" name="ph" value="{{old('ph', $Cultivo->ph)}}">
        </label>
    
        @error('ph')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
    
        <br>
        <label>
            Amonio (ppm) (2 > Optimo > 0.6)
            <br>
            <input type="number" name="amonio" value="{{old('amonio', $Cultivo->amonio)}}">
        </label>
    
        @error('amonio')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        
    </div>

    <div class="items">
    <label>
        Nitritos (ppm) (0.1 > Optimo)
        <br>
        <input type="number" name="nitritos" value="{{old('nitritos', $Cultivo->nitritos)}}">
    </label>

    @error('nitritos')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <label>
        Dioxido de carbono (ppm) (20 > Optimo)
        <br>
        <input type="number" name="dioxidoCarbono" value="{{old('dioxidoCarbono', $Cultivo->dioxidoCarbono)}}">
    </label>

    @error('dioxidoCarbono')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <label>
        Fosfatos (ppm) (1.5 > Optimo > 0.6)
        <br>
        <input type="number" name="fosfatos" value="{{old('fosfatos', $Cultivo->fosfatos)}}">
    </label>

    @error('fosfatos')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <label>
        Cloruros (ppm) (10 > Optimo) 
        <br>
        <input type="number" name="cloruros" value="{{old('cloruros', $Cultivo->cloruros)}}">
    </label>

    @error('cloruros')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <label>
        Sulfatos (ppm) (18 > Optimo)
        <br>
        <input type="number" name="sulfatos" value="{{old('sulfatos', $Cultivo->sulfatos)}}">
    </label>

    @error('sulfatos')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br>
    <button type="submit">Enviar formulario</button>

</form>
    <a href="{{route('piscicultor.index')}}">Volver al cultivo</a>
    @endsection
    </div>
    


