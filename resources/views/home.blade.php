@extends('layouts.plantilla2')

@section('title', 'Home')

@section('content')
<div>
    <p class="flex justify-center font-serif text-7xl text-blue-400">PAGINA INICIAL (acceso del login)</p>
</div>

    @csrf

    <br>
    <br>
    <div class="container mx-10">
        <h1></h1>
        <label>
         <a href={{route('auth.loginPropietario')}}> login propietario</a>
        </label>
        <br>
        <br>
        <label>
          <a href="">login Piscicultor</a>
        </label>
        <br>
        <br>

    </div>





<br>
<br>
<br>
<a href={{route('cultivos.index')}}>interfaz Propietario (cultivos.index - borrar) </a>
<br>
<p><a href="{{route('auth.loginPiscicultor')}}">Login Piscicultor</a></p>


@endsection
