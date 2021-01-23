@extends('layouts.plantilla')

@section('title', 'cultivos')

@section('content')
<h1>Home prron</h1>
<a href={{route('cultivos.create')}}>Crear curso</a>
<ul>
    @foreach ($curso as $item)
    <a href="{{route('cultivos.show', $item->id)}}"><li>{{$item->name}}</li></a>
    @endforeach
</ul>
{{$curso->links()}}
<a href={{route('home')}}>Volver Home</a>
@endsection

