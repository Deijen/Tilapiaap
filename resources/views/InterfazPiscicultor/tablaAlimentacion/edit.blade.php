@extends('layouts.interfaces')

@section('title', 'Tabla de alimentacion edit')

@section('content')
<div class="name_page">
    Pagina para editar la tabla de alimentacion
</div>

<!--cultivo.update ,manda los datos del formulario-->
<form action="{{route('tablaAlimentacion.update', $tablaAlimentacion)}}" method="post"> 
    @csrf
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

    <br><br>

    <label>
        Tamizado :
        <br>
        <input type="radio" name="Tamizado" value="Si">
        <label for="Si">Si</label><br>
        <input type="radio"  name="Tamizado" value="No">
        <label for="Si">No</label><br>

    </label>

    @error('Tamizado')
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

    @error('tamañoParticula')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>

    
    <button type="submit">Actualizar tabla</button>

</form>
@endsection