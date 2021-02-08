@extends('layouts.base')
@section('title', 'Login Propietario')

@section('content')
<div class="name_page">
    LOG IN PROPIETARIO
</div>
<form action="{{route('auth.checkPropietario')}}" method="POST">
    @csrf
    <div class="formulario_login">
        <img class="avatar" src="/img/Propietario.png">
        <label for="Email">E-Mail:</label>
        <input type="text" name="correo" placeholder="Enter E-Mail">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" placeholder="Enter Password">
        <input class="log-in" type="submit" value="Log In"></button>
        <a href="{{route('home')}}">Volver</a>
    </div>

</form>

@endsection