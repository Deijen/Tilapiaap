@extends('layouts.base')
@section('title', 'Login Propietario')

@section('content')
<div class="name_page">
    LOGIN PROPIETARIO
</div>
<br>
<br>

<form action="{{route('auth.checkPropietario')}}" method="POST">  <!--Esta ruta hace uso de la función "chekPropietario" que se encuentra en el "LoginController"-->
    @csrf
    <div class="formulario_login">
        <img class="avatar" src="/img/Propietario.png">
        <label for="Email">E-Mail:</label>
        <input type="text" name="correo" placeholder="Enter E-Mail">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" placeholder="Enter Password">
        <input class="log-in" type="submit" value="Log In"></button>
        <a href="{{route('home')}}">Volver</a> <!--Regresa al home-->
    </div>

</form>

@endsection