@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
<h1>Pagina para crear cursos</h1>


<div class="container">
<form action="{{route('cursos.store')}}" method="POST"> 

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}" class = "border-2 border-black" >
    </label>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>
        Descripcion:
        <br>
        <textarea name="description" rows="5" class = "border-2 border-black">{{old('description')}} </textarea>
    </label>

    @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}" class = "border-2 border-black">
    </label>

    @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <br>
    <button type="submit" class = "border-2 border-black" >Enviar Formulario</button>

</form>
</div>
<a href="{{route('cursos.index')}}">Volver a cursos</a>
@endsection


