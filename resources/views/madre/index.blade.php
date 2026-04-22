@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/desaparecerFlash.js'])
</head>

<body>
    @section('content')

    <div id="mensaje-exito" class="container">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
    </div>

    <div id="mensaje-editado" class="container">
        @if(session()->has('update'))
        <div class="alert alert-primary">
            {{session('update')}}
        </div>
        @endif
    </div>

    <div id="mensaje-eliminado" class="container">
        @if(session()->has('destroy'))
        <div class="alert alert-danger">
            {{session('destroy')}}
        </div>
        @endif
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>
                        Tarjetas madre
                        <a class="btn btn-primary float-end" href="{{url('madre/create')}}">Agregar una tarjeta
                            madre</a>
                    </h4>
                </div>


                <div class="row">

                    <div class="col-xs-6">
                        <form action="{{route('madre.index')}}" method="GET">
                            <div class="btn-group">
                                <input type="text" name="busqueda" class="form-control">
                                <input type="submit" value="buscar" class="btn btn-primary">
                                <input type="submit" value="limpiar" class="btn btn-warning">

                            </div>
                        </form>
                    </div>
                    <br>

                    <br>
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Enchufe de CPU</th>
                                <th>Dispositivos Compatibles</th>
                                <th>Tecnologia de la memoria RAM</th>
                                <th>Procesadores Compatibles</th>
                                <th>Tipo de circuitos integrados</th>
                                <th>Velocidad del reloj de la memoria</th>
                                <th>Nombre del modelo</th>
                                <th>Capacidad de almacenamiento de la memoria</th>
                                <th>Descripción</th>
                                <th>Visibilidad</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($madres as $madre)
                        <tr>
                            <td>{{$madre->idTarjetas_Madre}}</td>
                            <td>{{$madre->Nombre_del_producto}}</td>
                            <td>{{$madre->Marca}}</td>
                            <td>{{$madre->Enchufe_de_CPU}}</td>
                            <td>{{$madre->Dispositivos_Compatibles}}</td>
                            <td>{{$madre->Tecnologia_de_la_memoria_RAM}}</td>
                            <td>{{$madre->Procesadores_Compatibles}}</td>
                            <td>{{$madre->Tipo_de_circuitos_integrados}}</td>
                            <td>{{$madre->Velocidad_del_reloj_de_la_memoria}}</td>
                            <td>{{$madre->Nombre_del_modelo}}</td>
                            <td>{{$madre->Capacidad_de_almacenamiento_de_la_memoria}}</td>
                            <td>{{$madre->Descripcion}}</td>
                            <td>{{$madre->Estatus->Nombre_Estatus}}</td>


                            <td><img src="{{asset('storage/'.$madre->Portada)}}" alt="image" class="rounded-circle"
                                    width="50" height="50"></td>

                            
                            <th><a class="btn btn-warning" href="{{route('madre.edit', ['madre'=>$madre])}}">Editar</a></th>
                            

                            
                            <th>
                                <form action="{{route('madre.destroy', ['madre'=>$madre])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>
                            


                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{ $madres->appends(['busqueda'=>$busqueda]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>