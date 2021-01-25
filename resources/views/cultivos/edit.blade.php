@extends('layouts.plantilla')

@section('title', 'Cultivos edit')

@section('content')
<h1>Pagina para editar Cultivos</h1>



<form action="{{route('cultivos.update', $Cultivo)}}" method="post"> 

    @csrf
    @method('put')

    <label>
        Piscicultor:
        <br>
        <input type="text" name="Piscicultor" value="{{old('description', $Cultivo->id_piscicultor)}}">
    </label>

    @error('Piscicultor')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <label>
        Tabla de Alimentacion:
        <br>
        <input type="text" name="tablaAlimentacion" value="{{old('tablaAlimentacion', $Cultivo->categoria)}}">
    </label>

    @error('tablaAlimentacion')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>
        Valor:
        <br>
        <input type="text" name="valor" value="{{old('valor', $Cultivo->valor)}}">
    </label>

    @error('valor')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <button type="submit">Actualizar formulario</button>

</form>
<a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
@endsection
