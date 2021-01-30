@extends('layouts.plantilla')

@section('title', 'Cultivo ' . $Cultivo->id_cultivo)  

@section('content')
<h1>Mostrando Cultivo</h1>
<p><strong>ID_cultivo: </strong> {{$Cultivo->id_cultivo}}</p>
<p><strong>Piscicultores: </strong> {{$Cultivo->piscicultor_id}}</p>
<!--lista de piscicultores-->
<!--La variable piscicultor no está definida. Debe ser por la ruta. Se está usando la ruta para cultivos-->
@foreach ($piscicultores as $item)
   <strong> <a  href="{{route('cultivos.show', $item->Nombre)}}"><li>{{$item->Nombre}}</li></a> </strong> 
   <!-- @endforeach -->
<!---->
<p><strong>Tabla de Alimentacion: </strong> {{$Cultivo->tablaAlimentacion_id}}</p>
<p><strong>Valor: </strong> {{$Cultivo->valor}}</p>
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


