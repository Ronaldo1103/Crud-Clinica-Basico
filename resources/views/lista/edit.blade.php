@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Eitar Datos</h1>
@stop

@section('content')
<form action="{{route('lista.update',$medi)}}" method="post">
    
       
    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold"> Editar Datos</h2>
    <div class="row justify-content-center">
     <div class="col-6">
   
       <div class="form-group">
    <label class="">Nombre</label>
   <input class="form-control" placeholder="Nombre" name="nombre" value="{{$medi->nombre}}">
   @error('nombre')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
       <div class="form-group">
   <label>Apellido </label>
   <input class="form-control"
   placeholder="Apellido " name="apellido"  value="{{$medi->apellido}}">
   @error('apellido')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
   <div class="form-group">
   <label>Area de Trabajo</label>
   <input class="form-control" placeholder="Area" name="area" value="{{$medi->area}}">
   @error('area')
       <span class="text-danger">{{$message}}</span>
   @enderror
   <div>
   <div class="form-group">
   <label>Turno de Atencion</label>
    <select class="form-control" name="turno" value={{$medi->turno}}>
    <option value="Mañana">Mañana</option>
    <option value="Tarde">Tarde</option>
</select>
  {{-- @error('turno')
       <span class="text-danger">{{$message}}</span>
   @enderror--}}
   <div>
   <br><br>
   <button type="submit" class="btn btn-primary mx-2">Registrar</button>
   <a href="{{route('lista.index')}}" class="btn btn-danger">Regresar</a>
   </form>
   </div>

@stop