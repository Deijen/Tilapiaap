@extends('layouts.plantilla')

@section('title', 'Cultivos edit')

@section('content')
<h1>Pagina para editar Cultivos</h1>
<br>

<!--Se indica que cultivo se va a editar-->
<h1> <strong> Id del cultivo a editar: {{$Cultivo->id_cultivo}}</strong> </h1>
<br>


<!--cultivo.update ,manda los datos del formulario-->
<form action="{{route('cultivos.update', $Cultivo)}}" method="post"> 

    @csrf
    @method('put')

    <label>
       
        <br>
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
        Valor :
        <br>
        <input type="text" name="valor" value="{{old('valor', $Cultivo->valor)}}">
    </label>

    @error('valor')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <button type="submit">Actualizar formulario</button>

</form>
<a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
@endsection
