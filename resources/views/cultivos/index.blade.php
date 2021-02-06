@extends('layouts.plantilla')

@section('title', 'cultivos')

@section('content')
<h1>Interfaz propietario</h1>
<a href={{route('cultivos.create')}}>Crear cultivo</a>
<br>
<a href="{{route('empleados.create')}}"> Crear piscicultor</a>
<ul>
    <h1> Listado de cultivos</h1>
    @foreach ($Cultivo as $item)
    <p> <a  href="{{route('cultivos.show', $item->id_cultivo)}}"><li>{{$item->id_cultivo}}</li></a> </p>
    @endforeach
</ul>
<!-- el metodo "links" sirve para paginar y mostrar los cultivos-->
{{$Cultivo->links()}}
<a href={{route('home')}}>Volver Home</a>


@endsection

