@extends('layouts.plantilla')

@section('title', 'cultivos')

@section('content')
<h1>Home prron</h1>
<a href={{route('cultivos.create')}}>Crear curso</a>
<ul>
    @foreach ($Cultivo as $item)
    <a href="{{route('cultivos.show', $item->id_cultivo)}}"><li>{{$item->id_cultivo}}</li></a>
    @endforeach
</ul>
{{$Cultivo->links()}}
<a href={{route('home')}}>Volver Home</a>
@endsection

