@extends('layouts.base')

@section('title', 'Home')

@section('content')
<div class="name_page">
    INICIO DE SESIÓN
</div> 
<!--Página de inicio que lleva  a las vistas "login Propietario" y "login Piscicultor" respectivamente-->
<div class="users">
    <figure>
        <a href={{route('auth.loginPropietario')}}><i class="fas fa-user-tie"></i></a> <!--Ruta que lleva al login del propietario que a su vez usa del controlador "LoginController"-->
        <figcaption>
            Propietario
        </figcaption>
    </figure>

    <figure>
        <a href="{{route('auth.loginPiscicultor')}}"> <i class="fas fa-user-alt"></i></a> <!--Ruta que lleva al login del piscicultor que a su vez usa del controlador "LoginController"-->
        <figcaption>
            Piscicultor
        </figcaption>
    </figure>
</div>

@endsection
