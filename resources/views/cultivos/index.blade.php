@extends('layouts.plantilla')

@section('title', 'cultivos')

@section('content')
<h1>Home prron</h1>
<a href={{route('cultivos.create')}}>Crear curso</a>
<ul>
    @foreach ($Cultivo as $item)
<<<<<<< HEAD
    <a href="{{route('cultivos.show', $item->id_cultivo)}}"><li>{{$item->valor}}</li></a>
=======
    <a href="{{route('cultivos.show', $item->id_cultivo)}}"><li>{{$item->id_cultivo}}</li></a>
>>>>>>> ebf4433c1174eaca34afc8ddf05d753f09e91dc8
    @endforeach
</ul>
{{$Cultivo->links()}}
<a href={{route('home')}}>Volver Home</a>
@endsection

