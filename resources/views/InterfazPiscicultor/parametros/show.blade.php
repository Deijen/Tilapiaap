@extends('layouts.interfaces')

@section('title', 'Cultivo ')  

@section('content')

@if ($Cultivo)
    <p>Mostrando Cultivo</p><br>
    <p><strong>ID_cultivo: </strong> {{$Cultivo->id_cultivo}}</p>
    <p><strong>id_piscicultor: </strong> {{$loggedPiscicultorInfo['id_piscicultor']}}</p>
    <p><strong>Cantidad de tilapias: </strong> {{$Cultivo->cantidadTilapias}}</p>
    <p><strong>Intensidad: </strong> {{$Cultivo->intensidad}}</p>
    <p><strong>Estado: </strong> {{$Cultivo->estado}}</p>
    <p><strong>Oxigeno: </strong> {{$Cultivo->oxigeno}}</p>
    <p><strong>temperatura: </strong> {{$Cultivo->temperatura}}</p>
    <p><strong>PH: </strong> {{$Cultivo->ph}}</p>
    <p><strong>Amonio: </strong> {{$Cultivo->amonio}}</p>
    <p><strong>Nitritos: </strong> {{$Cultivo->nitritos}}</p>
    <p><strong>Dioxido de carbono: </strong> {{$Cultivo->dioxidoCarbono}}</p>
    <p><strong>Fosfatos: </strong> {{$Cultivo->fosfatos}}</p>
    <p><strong>Cloruros: </strong> {{$Cultivo->cloruros}}</p>
    <p><strong>Sulfatos: </strong> {{$Cultivo->sulfatos}}</p>
    <br>
    
    
    <br>
    <p><strong><a href="{{route('tablaAlimentacion.show')}}">Ver tabla de alimentacion</a> </strong></p>
    <a href="{{route('piscicultor.edit', $Cultivo)}}">Actualizar Parametros</a>
    <br>
    
    <br>
    
@else
    <p>Usted no esta asignado a ningun Cultivo</p>
    
@endif

<a href="{{route('auth.logoutPiscicultor')}}">Logout</a>

@endsection