@extends('adminlte::page')

@section('title', 'Medicos')

@section('content_header')
    <h1>Lista de Pacientes</h1>
@stop

@section('content')
<a href="{{route('cita.create')}}" class="btn btn-success">Agregar</a>
<br><br>
   <div class="card">
    <div class="card-body">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th class="text-center">Nº</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido Paterno</th>
                    <th class="text-center">Apellido Materno</th>
                    <th class="text-center">Medico</th>
                    <th class="text-center">Fecha de Creacion</th>
                    <th class="text-center">Fecha de Actualizacion</th>
                    <th rowspan="10" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $lista as $row )
                <tr>
                    <td class="text-center">{{$row->id}}</td>
                    <td class="text-center">{{$row->nombre}}</td>
                    <td class="text-center">{{$row->apellidopa}}</td>
                    <td class="text-center">{{$row->apellidoma}}</td>
                    <td class="text-center">{{$row->medico}}</td>                  
                    <td class="text-center">{{$row->created_at}}</td>
                    <td class="text-center">{{$row->updated_at}}</td>
                    <td class="row justify-center  ">
                        
                        <a href="{{route('cita.show', $row)}}" class="btn-sm btn btn-success "><i class="fa-solid fa-user-pen"></i></a>
                        <a href="{{route('cita.edit', $row)}}" class="btn btn-primary btn-sm mx-2" >
 
 
                            <i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{route('cita.destroy', $row)}}" method="post">
                        @method('delete')
                        @csrf
                        
                       <button class="btn btn-danger btn-sm "><i class="fa-solid fa-trash"></i></button>
                        </form> 
                        <td>
                        <tr>
                @endforeach
            </tbody>
        </table>

    </div>

   </div>
   <script src="https://kit.fontawesome.com/4d172d0818.js" crossorigin="anonymous"></script>
@stop