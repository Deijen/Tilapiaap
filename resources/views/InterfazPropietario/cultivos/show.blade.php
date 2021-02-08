@extends('layouts.interfaces')

@section('title', 'Cultivo ' . $Cultivo->id_cultivo)  

@section('content')
<div class="name_page">
    Mostrando Cultivo
</div>
<div class="propiedades_cultivo">
    <p><strong>ID_cultivo: </strong> {{$Cultivo->id_cultivo}}</p>
    <p><strong>Piscicultores: </strong> {{$Cultivo->piscicultor_id}}</p>

    @foreach ($piscicultores as $item)
        <strong> <a href="{{route('empleados.show', $item->id_piscicultor)}}"><li>{{$item->Nombre}}</li></a> </strong> 
    @endforeach 
    <h1>----------------------------------</h1>
    <p><strong>Costos de mantenimiento: </strong> {{$Cultivo->costosMantenimiento}}</p>
    <br>
    <br>
    <a href="{{route('cultivos.edit', $Cultivo)}}">Editar Cultivo</a>
    <br>
    <a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
    <br>
    <a href="{{route('informe.show', $Cultivo)}}">Descargar informe</a>
    <br>
    <br>
    <form action="{{route('cultivos.destroy' , $Cultivo)}}" method="POST">

        @csrf
        @method('delete')

        <button type="submit" class="border-2 border-black">Eliminar Cultivo</button>
    </form>
</div>




<br>




@endsection


