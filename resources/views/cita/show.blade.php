@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vista del Cliente</h1>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary"></div>
                            <div class="card-title text-center">
                               <h3> Vista Detallada del Usuario</h3></div>
                            <p class="card-category text-center">{{$cita->nombre}}</p>
                        </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <a href="">
                                                    <div class="author">
                                                        <h5 class="title mt-3 text-center">Detalles:</h5> 
                                                        
                                                    </a>
                                                        <p class="description">
                                                            <h5 class="text-center">Nombre:</h5> 
                                                            <h6 class="text-center">{{$cita->nombre}}</h6> 
                                                            <h5 class="text-center">Apellidos Paterno </h5> 
                                                            <h6 class="text-center">{{$cita->apellidopa}}</h6> 
                                                            <h5 class="text-center">Apellidos Materno</h5> 
                                                            <h6 class="text-center">{{$cita->apellidoma}} </h6> 
                                                            <h5 class="text-center">Medico Encargado: </h5> 
                                                            <h6 class="text-center">{{$cita->medico}} </h6> <br>
                                                        </p>
                                                    </div>
                                                </p>
                                                
                                                <div class="card-footer">
                                                    <div class="btn btn-primary">
                                                      <a href="{{route('cita.index')}}"  class="btn btn-primary btn-sm">Regresar</a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                </div>

            </div>
        </div>

    </div>

@stop