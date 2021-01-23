@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
<h1>Home prron</h1>
<a href={{route('cursos.create')}}>Crear curso</a>
<ul>
    @foreach ($curso as $item)
    <a href="{{route('cursos.show', $item->id)}}"><li>{{$item->name}}</li></a>
    @endforeach
</ul>
{{$curso->links()}}
<a href={{route('home')}}>Volver Home</a>
@endsection

