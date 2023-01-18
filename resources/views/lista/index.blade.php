@extends('adminlte::page')

@section('title', 'Listado de Medicos')

@section('content_header')
    <h1>Listado de Medicos</h1>
@stop

@section('content')
<a href="{{route('lista.create')}}" class="btn btn-primary">Agregar</a>
<br><br>
   <div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">Nº</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido </th>            
                    <th class="text-center">Area </th>
                    <th class="text-center">Turno de Atencion</th>
                    <th colspan="10 " class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach (  $medi as $item )
                <tr>
                    <td class="text-center">{{$item->id}}</td>
                    <td class="text-center">{{$item->nombre}}</td>
                    <td class="text-center">{{$item->apellido}}</td>
                    <td class="text-center">{{$item->area}}</td>
                    <td class="text-center">{{$item->turno}}</td>                  
                    <td class=" row justify-center ">
                        <a href="{{route('lista.show', $item)}}" class="btn-sm btn btn-success "><i class="fa-solid fa-user-pen"></i></a>
                        <a href="{{route('lista.edit', $item)}}" class="btn btn-primary btn-sm mx-2" ><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{route('lista.destroy', $item)}}" method="post">
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