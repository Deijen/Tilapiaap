@extends('layouts.interfaces')

@section('title', 'cultivos Create' )

@section('content')
<div class="name_interfaz">
    Crear piscicultor
</div>


    <!--por medio del método 'store', empleado por la ruta 'empleados' toda la información 
    del formulario se envia a través del metodo-->
    <form action="{{route('empleados.store')}}" method="post"> 
        @csrf
        <div class="formulario_piscicultor">
            <!-------------------------------------------------------------------->
            <img class="avatar" src="/img/Piscicultor.png">
            <label for="Id_piscicultor">Id del piscicultor:</label>
            <input type="text" name='id_piscicultor' value="{{old('id_piscicultor')}}" placeholder="ID Piscicultor">

            @error('id_piscicultor')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <!-------------------------------------------------------------------->

            <!-------------------------------------------------------------------->
            <label for="name">Nombre del piscicultor:</label>
            <input type="text" name='Nombre' value="{{old('Nombre')}}" placeholder="Nombre">
        
            @error('Nombre')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
            <!-------------------------------------------------------------------->

            <label for="salario">Salario:</label>
            <input type="text" name="salario" value="{{old('salario')}}" placeholder="Salario">
        
            @error('salario')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <!-------------------------------------------------------------------->

            <label for="email">Correo:</label>
            <input type="text" name="correo" value="{{old('correo')}}" placeholder="E-Mail">

            @error('correo')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <!-------------------------------------------------------------------->

            <label for="password">Contraseña.</label>
            <input type="password" name="password" value="{{old('password')}}" placeholder="Password">

            @error('password')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            
            <input class="create" type="submit" value="Enviar formulario"></button>
            <br>
            <a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
        </div>
        
    </form>
    @endsection