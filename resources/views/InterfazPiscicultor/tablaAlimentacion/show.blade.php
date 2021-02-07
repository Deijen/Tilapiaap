@extends('layouts.plantilla2')

@section('title', 'Tabla de Alimentacion')  

@section('content')
<h1>Mostrando Tabla de Alimentacion</h1>

<p><strong>Contenido Proteico: </strong> {{$tablaAlimentacion->contenidoProteico}}</p>
<p><strong>Tamizado: </strong> {{$tablaAlimentacion->Tamizado}}</p>
<p><strong>Tamaño de particula: </strong> {{$tablaAlimentacion->tamañoParticula}}</p>

<br>
<a href="{{route('tablaAlimentacion.edit', $tablaAlimentacion)}}">Actualizar tabla de alimentacion</a>
<br>

@endsection

