@extends('layouts.plantilla')

@section('title', 'Tabla de alimentacion edit')

@section('content')
<h1>Pagina para editar la tabla de alimentacion</h1>
<br>

<!--cultivo.update ,manda los datos del formulario-->
<form action="{{route('tabla.update', $tablaAlimentacion)}}" method="post"> 

    <br>
    <label>
        Contenido Proteico :
        <br>
        <input type="text" name="contenidoProteico" value="{{old('contenidoProteico', $tablaAlimentacion->contenidoProteico)}}">
    </label>

    @error('contenidoProteico')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>

    <label>
        Tamizado :
        <br>
        <input type="radio" name="Tamizado" value="Si">
        <label for="si">Si</label><br>
        <input type="radio"  name="Tamizado" value="No">
        <label for="no">No</label><br>>

    </label>

    @error('costosMantenimiento')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>

    <label>
        Tamaño de particula:
        <br>
        <input type="text" name="tamañoParticula" value="{{old('tamañoParticula', $tablaAlimentacion->tamañoParticula)}}">
    </label>

    @error('costosMantenimiento')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>

    
    <button type="submit">Actualizar tabla</button>

</form>
@endsection