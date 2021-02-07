@extends('layouts.plantilla')

@section('title', 'cultivos Create' )

@section('content')
<h1>Pagina para crear piscicultores</h1>


    <!--por medio del método 'store', empleado por la ruta 'empleados' toda la información 
    del formulario se envia a través del metodo-->
    <form action="{{route('empleados.store')}}" method="post"> 

        @csrf
    
        
    
        <br>
        <!-------------------------------------------------------------------->
        <label>
            Id del piscicultor:  (Trabajar con la cedula) 
            <br>
            <input type="text" name='id_piscicultor' value="{{old('id_piscicultor')}}" >
         </label>

         @error('id_piscicultor')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
         <!-------------------------------------------------------------------->
         <br>

         <!-------------------------------------------------------------------->
        <label>
           Nombre del piscicultor: 
           <br>
           <input type="text" name='Nombre' value="{{old('Nombre')}}" >
        </label>
    
        @error('Nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <!-------------------------------------------------------------------->


        <br>
        <label>
            Salario (a convenir):
            <br>
            <input type="text" name="salario" value="{{old('salario')}}">
        </label>
    
        @error('salario')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <!-------------------------------------------------------------------->

        <br>

        <label>
            Correo. 
            <br>
            <input type="text" name="correo" value="{{old('correo')}}">
        </label>
        @error('correo')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
         <!-------------------------------------------------------------------->

         <br>
         <label>
            Contraseña. 
            <br>
            <input type="text" name="password" value="{{old('password')}}">
        </label>
        @error('password')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>



        <button type="submit">Enviar formulario</button>
    
    </form>
    <a href="{{route('cultivos.index')}}">Volver a Cultivos</a>
    @endsection