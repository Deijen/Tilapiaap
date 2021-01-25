@extends('layouts.plantilla')

@section('title', 'Cultivo ' . $Cultivo->id_cultivo)

@section('content')
<h1>Mostrando Cultivo</h1>
<p><strong>Nombre: </strong> {{$Cultivo->id_cultivo}}</p>
<p><strong>Categoria: </strong> {{$Cultivo->piscicultor_id}}</p>
<p><strong>Descripcion: </strong> {{$Cultivo->tablaAlimentacion_id}}</p>
<p><strong>Descripcion: </strong> {{$Cultivo->valor}}</p>
<br>
<a href="{{route('Cultivos.edit', $Cultivo)}}">Editar Cultivo</a>
<br>
<a href="{{route('Cultivos.index')}}">Volver a Cultivos</a>

<form action="{{route('Cultivos.destroy' , $Cultivo)}}" method="POST">

    @csrf
    @method('delete')

    <button type="submit" class="border-2 border-black">Eliminar Cultivo</button>
</form>
@endsection


