@extends('layouts.plantilla')

@section('title', 'cultivos')

@section('content')
<h1>Interfaz propietario</h1>
<a href={{route('empleados.create')}}>Crear piscicultor</a>
<ul>
    <h1> Listado de piscicultores</h1>
    @foreach ($Piscicultor as $item)
    <strong> <a  href="{{route('empleados.show', $item->id_piscicultor)}}"><li>{{$item->Nombre}}</li></a> </strong>
    @endforeach
</ul>
<!-- el metodo "links" sirve para paginar y mostrar los cultivos-->
{{$Piscicultor->links()}}
<a href={{route('home')}}>Volver Home</a>
@endsection