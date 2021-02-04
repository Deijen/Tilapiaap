@extends('layouts.plantilla2')

@section('title', 'Home')

@section('content')
<div>
    <p class="flex justify-center font-serif text-7xl text-blue-400">PAGINA INICIAL</p>
</div>
<form action="{{route('inicio')}}" method="POST">
    @csrf

    <div class="container mx-10">
        <h1></h1>
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
        <button type="submit" class="flex justify-center border-2 border-black w-20">Log in</button>
    </div>



</form>


<a href={{route('cultivos.index')}}>Pagina Cursos (cultivos.index - borrar) </a>
@endsection
