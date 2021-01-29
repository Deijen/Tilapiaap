@extends('layouts.plantilla')

@section('title', 'Cultivo ' . $Cultivo->id_cultivo)

@section('content')
<h1>Mostrando Cultivo</h1>
<p><strong>ID: </strong> {{$Cultivo->id_cultivo}}</p>
<p><strong>Piscicultor: </strong> {{$Cultivo->piscicultor_id}}</p>
<p><strong>Tabla de Alimentacion: </strong> {{$Cultivo->tablaAlimentacion_id}}</p>
<p><strong>Valor: </strong> {{$Cultivo->valor}}</p>
<br>
<a href="{{route('cultivos.edit', $Cultivo)}}">Editar Cultivo</a>
<br>
<a href="{{route('cultivos.index')}}">Volver a Cultivos</a>

<form action="{{route('cultivos.destroy' , $Cultivo)}}" method="POST">

    @csrf
    @method('delete')

    <button type="submit" class="border-2 border-black">Eliminar Cultivo</button>
</form>
@endsection


