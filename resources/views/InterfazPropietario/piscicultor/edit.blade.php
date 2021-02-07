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
        <input type="text" name="Nombre" value="{{old('Nombre', $Piscicultor->Nombre)}}">
    </label>

    @error('Nombre')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>

    <label>
        Salario:
        <br>
        <input type="text" name="salario" value="{{old('salario', $Piscicultor->salario)}}">
    </label>

    @error('salario')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br>
    <label>
        Correo:
        <br>
        <input type="text" name="correo" value="{{old('correo', $Piscicultor->correo)}}">
    </label>
    <br>
    @error('correo')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br>
    <label>
        Contraseña:
        <br>
        <input type="text" name="password" value="{{old('password', $Piscicultor->password)}}">
    </label>

    @error('password')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    
    <br>
   

    

    <br>
    <button type="submit">Actualizar formulario</button>

</form>
<a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
@endsection