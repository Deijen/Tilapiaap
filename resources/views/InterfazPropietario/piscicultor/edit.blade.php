@extends('layouts.plantilla')

@section('title', 'Emmpleados edit')

@section('content')
<h1>Pagina  para editar empleados</h1>
<br>

<!--Se indica que empleado se va a editar-->
<h1> <strong> Id del empleado a editar: {{$Piscicultor->id_piscicultor}}</strong> </h1>
<br>


<!--empleados.update ,manda los datos del formulario-->
<form action="{{route('empleados.update', $Piscicultor)}}" method="post"> 

    @csrf
    @method('put')

    <label>
        Nombre del Piscicultor a editar:
        <br>
        <input type="text" name="Nombre" value="{{old('description', $Piscicultor->Nombre)}}">
    </label>

    @error('Nombre')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    

    
    <br>
   

    

    <br>
    <button type="submit">Actualizar formulario</button>

</form>
<a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
@endsection