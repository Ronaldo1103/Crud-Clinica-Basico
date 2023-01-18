@extends('adminlte::page')

@section('title', 'Agregar Medico')

@section('content_header')
    <h1>Agregar Medico</h1>
@stop

@section('content')
<form action="{{route('lista.store')}}" method="post">
    
       
    @csrf
       
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold"> Registrar Datos</h2>
    <div class="row justify-content-center">
     <div class="col-6">
   
       <div class="form-group">
    <label class="">Nombre</label>
   <input class="form-control" placeholder="Nombre" name="nombre">
   @error('nombre')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
       <div class="form-group">
   <label>Apellido</label>
   <input class="form-control"
   placeholder="Apellido " name="apellido">
   @error('apellido')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
   <div class="form-group">
   <label>Area de Trabajo</label>
   <input class="form-control" placeholder="Area de Trabajo" name="area">
   @error('area')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
   <div class="form-group">
   <label>Turno de Atencion </label>
   <select class="form-control" name="turno">
    <option value="" selected disable>Selecciona Turno</option>
    <option value="Mañana">Mañana</option>
    <option value="Tarde">Tarde</option>
</select>
 {{--@error('turno')
       <span class="text-danger">{{$message}}</span>
   @enderror--}}
  
   <div>
   <br>
   <button type="submit" class="btn btn-primary mx-2">Registrar</button>
   <a href="{{route('lista.index')}}" class="btn btn-danger">Regresar</a>
   </form>
   </div>

@stop