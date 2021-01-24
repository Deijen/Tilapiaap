@extends('layouts.plantilla')

@section('title', 'Cultivo ' . $Cultivo->id_cultivo)

@section('content')
<h1>Mostrando Cultivo</h1>
<p><strong>Nombre: </strong> {{$Cultivo->id_cultivo}}</p>
<p><strong>Categoria: </strong> {{$Cultivo->piscicultor_id}}</p>
<p><strong>Descripcion: </strong> {{$Cultivo->tablaAlimentacion_id}}</p>
<p><strong>Descripcion: </strong> {{$Cultivo->valor}}</p>
<br>
<<<<<<< HEAD
<a href="{{route('cultivo.edit', $curso)}}">Editar curso</a>
<br>
<a href="{{route('cultivo.index')}}">Volver a cursos</a>

<form action="{{route('cultivo.destroy' , $curso)}}" method="POST">
=======
<a href="{{route('Cultivos.edit', $Cultivo)}}">Editar Cultivo</a>
<br>
<a href="{{route('Cultivos.index')}}">Volver a Cultivos</a>

<form action="{{route('Cultivos.destroy' , $Cultivo)}}" method="POST">
>>>>>>> ebf4433c1174eaca34afc8ddf05d753f09e91dc8

    @csrf
    @method('delete')

    <button type="submit" class="border-2 border-black">Eliminar Cultivo</button>
</form>
@endsection


