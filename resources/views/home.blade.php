@extends('layouts.index')

@section('title', 'Home')

@section('content')
<div>
    <p>LOGIN HERE</p>
    <br>
</div>
    <div class="container mx-10">
        <label>
            <a href={{route('auth.loginPropietario')}}> <i id="yep" class="fas fa-user-tie"></i>  </a>
        </label>
        <br>
        <br>
        <label>
          <a href="{{route('auth.loginPiscicultor')}}"> <i id="yep" class="fas fa-user-alt"></i></a>
        </label>
        <br>
        <br>

    </div>

@endsection
