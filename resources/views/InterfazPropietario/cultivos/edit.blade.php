@extends('layouts.interfaces')

@section('title', 'Cultivos edit')

@section('content')
<div class="name_page">
    Pagina para editar Cultivos
</div>
<br>

<div class="propiedades_cultivo">
    <!--Se indica que cultivo se va a editar-->
    <h2><strong> Id del cultivo a editar: {{$Cultivo->id_cultivo}}</strong></h2>


    <!--cultivo.update ,manda los datos del formulario-->
    <form action="{{route('cultivos.update', $Cultivo)}}" method="post"> 

        @csrf
        @method('put')

        <label>
        <table>
            <tr> 
                <td> Piscicultores disponibles para asignar:</td>
            </tr>
            
            <tr>
            @foreach ($piscicultores as $piscicultor)
            <td> <li>{{$piscicultor->Nombre}}</li>  </td>
            <td> <strong> <a href="{{route('asignarEmpleado',  [$piscicultor->id_piscicultor, $Cultivo->id_cultivo])}}"> asignar al cultivo</a> </strong></td>
            </tr>
            @endforeach
        
            <br>
        

        </table>
        </label>

        @error('Piscicultor')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        

        

        <br>
        <label>
            Costo de mantenimiento :
            <br>
            <input type="number" name="costosMantenimiento" value="{{old('costosMantenimiento', $Cultivo->costosMantenimiento)}}">
            <br>
        </label>

        @error('costosMantenimiento')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>

        
        <button type="submit">Actualizar formulario</button>

    </form>
    <br>
    <a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
</div>
@endsection
