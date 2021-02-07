@extends('layouts.interfaces')
@section('title', 'Interfaz Propietario')

@section('content')
<div class="name_interfaz">
    Interfaz propietario
</div>

<div class="intefarz_usuario">
    <form action="{{route('cultivos.store')}}" method="POST">
        @csrf
        <input class="log-in" type="submit" value="Crear Cultivo">
    </form>
    <a href="{{route('empleados.create')}}"> Crear piscicultor</a>
    <ul>
        <h3> Listado de cultivos</h3>
        @foreach ($Cultivo as $item)
        <p> <a  href="{{route('cultivos.show', $item->id_cultivo)}}"><li>{{$item->id_cultivo}}</li></a> </p>
        @endforeach
    </ul>
    <!-- el metodo "links" sirve para paginar y mostrar los cultivos-->
    {{$Cultivo->links()}}
    <a href="{{route('home')}}">Volver Home</a>
    <a href="{{route('auth.logoutPropietario')}}">Logout</a>
</div>


@endsection

