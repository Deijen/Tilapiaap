@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
<h1>Mostrando curso</h1>
<p><strong>Nombre: </strong> {{$curso->name}}</p>
<p><strong>Categoria: </strong> {{$curso->categoria}}</p>
<p><strong>Descripcion: </strong> {{$curso->description}}</p>
<br>
<a href="{{route('cultivo.edit', $curso)}}">Editar curso</a>
<br>
<a href="{{route('cultivo.index')}}">Volver a cursos</a>

<form action="{{route('cultivo.destroy' , $curso)}}" method="POST">

    @csrf
    @method('delete')

    <button type="submit" class="border-2 border-black">Eliminar Curso</button>
</form>
@endsection


