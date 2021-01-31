@extends('layouts.plantilla')

@section('title', 'cultivos Create')

@section('content')
<h1>Pagina para crear cultivos</h1>

    <form action="{{route('cultivos.store')}}" method="post"> 

        @csrf
    
        
    
        <br>
        <label>
            <!--La tabla de alimentación debe ser un link. Quitar el input. No va en la creacion de cultivos del propietario-->
            Tabla de Alimentacion:
            <br>
            <input type="text" name="tablaAlimentacion" value="{{old('tablaAlimentacion')}}">
        </label>
    
        @error('tablaAlimentacion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
    
        <br>
        <label>
            Valores (intensidad, numero de tilapias):
            <br>
            <input type="text" name="valor" value="{{old('valor')}}">
        </label>
    
        @error('valor')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
    
        <br>
        <button type="submit">Enviar formulario</button>
    
    </form>
    <a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
    @endsection


