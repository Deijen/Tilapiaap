@extends('layouts.base')
@section('title', 'Login Piscicultor')

@section('content')
<div class="name_page">
    LOG IN PISCICULTOR
</div>

<form action="{{route('auth.checkPiscicultor')}}" method="POST">
    @csrf
    <div class="formulario_login">
        <img class="avatar" src="/img/Piscicultor.png">
        <label for="username">E-Mail:</label>
        <input type="text" name="correo" placeholder="Enter E-Mail">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" placeholder="Enter Password">
        <input class="log-in" type="submit" value="Log In"></button>
        <a href="{{route('home')}}">Volver</a>
    </div>
</form>

@endsection