@extends('layouts.plantilla2')

@section('title', 'Home')

@section('content')


<p><a href="{{route('auth.loginPropietario')}}">Login Propietario</a></p>
<br>
<p><a href="{{route('auth.loginPiscicultor')}}">Login Piscicultor</a></p>


@endsection
