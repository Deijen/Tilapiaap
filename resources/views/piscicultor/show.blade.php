@extends('layouts.plantilla')

@section('title', 'Piscicultores ' . $Piscicultor->id_piscicultor)  

@section('content')
<h1>Mostrando Empleado</h1>
<p><strong>ID_empleado: </strong> {{$Piscicultor->id_piscicultor}}</p>
<p><strong>Nombre: </strong> {{$Piscicultor->Nombre}}</p>
<p><strong>Salario: </strong> {{$Piscicultor->salario}}</p>
<p><strong>Correo: </strong> {{$Piscicultor->correo}}</p>

<a href="{{route('empleados.edit', $Piscicultor)}}">Editar empleado</a>
<br>
<a href="{{route('cultivos.index')}}">Volver a Cultivos</a>

<form action="{{route('empleados.destroy' , $Piscicultor)}}" method="POST">

    @csrf
    @method('delete')

    <button type="submit" class="border-2 border-black">Eliminar Cultivo</button>
</form>
@endsection