@extends('layouts.base')

@section('title', 'Home')

@section('content')
<div class="name_page">
    INICIO DE SESIÓN
</div>
<div class="users">
    <figure>
        <a href={{route('auth.loginPropietario')}}><i class="fas fa-user-tie"></i></a>
        <figcaption>
            Propietario
        </figcaption>
    </figure>

    <figure>
        <a href="{{route('auth.loginPiscicultor')}}"> <i class="fas fa-user-alt"></i></a>
        <figcaption>
            Piscicultor
        </figcaption>
    </figure>
</div>

@endsection
