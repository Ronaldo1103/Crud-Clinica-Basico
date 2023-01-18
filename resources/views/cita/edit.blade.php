@extends('adminlte::page')

@section('title', 'Editar Cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
<form action="{{route('cita.update',$lista)}}" method="post">
    
       
    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold"> Editar Datos</h2>
    <div class="row justify-content-center">
     <div class="col-6">
   
       <div class="form-group">
    <label class="">Nombre</label>
   <input class="form-control" placeholder="Nombre" name="nombre" value="{{$lista->nombre}}">
   @error('nombre')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
       <div class="form-group">
   <label>Apellido Paterno</label>
   <input class="form-control"
   placeholder="Apellido Paterno" name="apellidopa"  value="{{$lista->apellidopa}}">
   @error('apellidopa')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
   <div class="form-group">
   <label>Apellido Materno</label>
   <input class="form-control" placeholder="Apellido Materno" name="apellidoma" value="{{$lista->apellidoma}}">
   @error('apellidoma')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
   <div class="form-group">
   <label>Medico</label>
   <input class="form-control"placeholder="Medico" name="medico" value="{{$lista->medico}}">
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