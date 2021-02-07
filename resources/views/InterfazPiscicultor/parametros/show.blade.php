@extends('layouts.plantilla2')

@section('title', 'Cultivo ' . $Cultivo->id_cultivo)  

@section('content')
<h1>Mostrando Cultivo</h1>
<p><strong>ID_cultivo: </strong> {{$Cultivo->id_cultivo}}</p>
<p><strong>id_piscicultor: </strong> {{$loggedPiscicultorInfo['id_piscicultor']}}</p>
<br>

<p><strong><a href="">Tabla de alimentación (link que llevará a la tabla de alimentacion)</a> </strong> {{$Cultivo->tablaAlimentacion_id}}</p>
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
<a href="{{route('piscicultor.edit', $Cultivo)}}">Actualizar Parametros</a>
<br>
<a href="{{route('tablaAlimentacion.show')}}">Ver tabla de alimentacion</a>
<br>
<a href="{{route('auth.logoutPiscicultor')}}">Logout</a>

@endsection