@extends('layouts.plantilla')

@section('title', 'Cultivo ' . $Cultivo->id_cultivo)  

@section('content')
<h1>Mostrando Cultivo</h1>
<p><strong>ID_cultivo: </strong> {{$Cultivo->id_cultivo}}</p>
<p><strong>Piscicultores: </strong> {{$Cultivo->piscicultor_id}}</p>

@foreach ($piscicultores as $item)
   <strong> <a href="{{route('empleados.show', $item->id_piscicultor)}}"><li>{{$item->Nombre}}</li></a> </strong> 
@endforeach 
<h1>----------------------------------</h1>
<br>

<p><strong><a href="">Tabla de alimentación (link que llevará a la tabla de alimentacion)</a> </strong> {{$Cultivo->tablaAlimentacion_id}}</p>
<p><strong>Cantidad de tilapias: </strong> {{$Cultivo->cantidadTilapias}}</p>
<p><strong>Costos de mantenimiento: </strong> {{$Cultivo->costosMantenimiento}}</p>
<p><strong>Intensidad: </strong> {{$Cultivo->intensidad}}</p>
<p><strong>Estado: </strong> {{$Cultivo->estado}}</p>
<p><strong>Oxigeno: </strong> {{$Cultivo->oxigeno}}</p>
<p><strong>temperatura: </strong> {{$Cultivo->temperatura}}</p>
<p><strong>PH: </strong> {{$Cultivo->ph}}</p>
<p><strong>Amonio: </strong> {{$Cultivo->amonio}}</p>
<p><strong>Dioxido de carbono: </strong> {{$Cultivo->dioxidoCarbono}}</p>
<p><strong>Fosfatos: </strong> {{$Cultivo->fosfatos}}</p>
<p><strong>Cloruros: </strong> {{$Cultivo->cloruros}}</p>
<p><strong>Sulfatos: </strong> {{$Cultivo->sulfatos}}</p>
<br>
<a href="{{route('cultivos.edit', $Cultivo)}}">Editar Cultivo</a>
<br>
<a href="{{route('cultivos.index')}}">Volver a Cultivos</a>

<form action="{{route('cultivos.destroy' , $Cultivo)}}" method="POST">

    @csrf
    @method('delete')

    <button type="submit" class="border-2 border-black">Eliminar Cultivo</button>
</form>
@endsection


