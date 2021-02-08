@extends('layouts.interfaces')

@section('title', 'Piscicultores ' . $Piscicultor->id_piscicultor)  

@section('content')
<div class="name_page">
    Mostrando Empleado
</div>
<br>
<div class="propiedades_cultivo">
    <p><strong>ID_empleado: </strong> {{$Piscicultor->id_piscicultor}}</p><br>
    <p><strong>Nombre: </strong> {{$Piscicultor->Nombre}}</p><br>
    <p><strong>Salario: </strong> {{$Piscicultor->salario}}</p><br>
    <p><strong>Correo: </strong> {{$Piscicultor->correo}}</p><br>

    <a href="{{route('empleados.edit', $Piscicultor)}}">Editar empleado</a>
    <br>
    <a href="{{route('cultivos.index')}}">Volver a Cultivos</a>

    <form action="{{route('empleados.destroy' , $Piscicultor)}}" method="POST">

        @csrf
        @method('delete')
        <br>
        <button type="submit" class="border-2 border-black">Eliminar Cultivo</button>
    </form>
</div>
@endsection