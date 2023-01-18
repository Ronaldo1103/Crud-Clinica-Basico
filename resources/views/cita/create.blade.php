@extends('adminlte::page')

@section('title', 'Crear Cita')

@section('content_header')
    <h1>Crear Cita</h1>
@stop

@section('content')
<form action="{{route('cita.store')}}" method="post">
    
       
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
   <label>Apellido Paterno</label>
   <input class="form-control"
   placeholder="Apellido Paterno" name="apellidopa">
   @error('apellidopa')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
   <div class="form-group">
   <label>Apellido Materno</label>
   <input class="form-control" placeholder="Apellido Materno" name="apellidoma">
   @error('apellido,a')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
   <div class="form-group">
   <label>Medico </label>
   <select class="form-control" name="medico">
    <option value="" selected disable>Selecciona un Medico</option>
   @foreach ($medico as $medicos )
    <option value="{{$medicos->nombre}}">{{$medicos->nombre}}</option>
    @endforeach
</select>

   @error('medico')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
   <br><br>
   <button type="submit" class="btn btn-primary mx-2">Registrar</button>
   <a href="{{route('cita.index')}}" class="btn btn-danger">Regresar</a>
   </form>
   </div>
   
@stop