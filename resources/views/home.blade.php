@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
<div>
    <p class="flex justify-center font-serif text-7xl text-blue-400">PAGINA INICIAL</p>
</div>
<div class="container mx-10">
    <h1>Log in</h1>
    <label>
        Usuario: 
        <br>
        <input type="text" name="user" class="border-2 border-black">
    </label>
    
    <br>
    <label>
        Contraseña:
        <br>
        <input type="text" name="password" class="border-2 border-black">
    </label>
    <br>
    <br>
    <button class="flex justify-center border-2 border-black w-20">Log in</button>
</div>
<a href={{route('cultivos.index')}}>Pagina Cursos</a>
@endsection
