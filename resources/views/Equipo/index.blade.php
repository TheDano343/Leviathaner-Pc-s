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
                        Equipos
                        <a class="btn btn-primary float-end" href="{{url('equipo/create')}}">Agregar un equipo</a>
                    </h4>
                </div>

                <div class="row">

                    <div class="col-xs-6">
                        <form action="{{route('equipo.index')}}" method="GET">
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
                                <th>Nombre del producto</th>
                                <th>Tipo de tarjeta grafica</th>
                                <th>Procesador</th>
                                <th>Gabinete</th>
                                <th>Pantalla</th>
                                <th>Teclados</th>
                                <th>Mouse</th>
                                <th>Memoria Ram</th>
                                <th>Tarjeta Grafica</th>
                                <th>Tarjeta Madre</th>
                                <th>Refrigeracion</th>
                                <th>Alimentacion</th>
                                <th>Cpu</th>
                                <th>Gama</th>
                                <th>Visibilidad</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($equipos as $equipo)
                        <tr>
                            <td>{{$equipo->idEquipos}}</td>
                            <td>{{$equipo->Nombre_producto}}</td>
                            <td>{{$equipo->Tipo_de_tarjeta_grafica}}</td>
                            <td>{{$equipo->Procesador->Nombre_del_producto}}</td>
                            <td>{{$equipo->Gabinete->Nombre_del_producto}}</td>
                            <td>{{$equipo->Pantalla->Nombre_del_producto}}</td>
                            <td>{{$equipo->Teclado->Nombre_del_producto}}</td>
                            <td>{{$equipo->Mouse->Nombre_del_producto}}</td>
                            <td>{{$equipo->Ram->Nombre_del_producto}}</td>
                            <td>{{$equipo->Grafica->Nombre_del_producto}}</td>
                            <td>{{$equipo->Madre->Nombre_del_producto}}</td>
                            <td>{{$equipo->Refrigeracion->Nombre_del_producto}}</td>
                            <td>{{$equipo->Alimentacion->Nombre_producto}}</td>
                            <td>{{$equipo->Cpu->Nombre_del_producto}}</td>
                            <td>{{$equipo->Categoria->Nombre}}</td>
                            <td>{{$equipo->Estatus->Nombre_Estatus}}</td>
                            <td>{{$equipo->Precio}}</td>


                            <td>
                                <a class="btn btn-warning"
                                    href="{{ route('equipo.edit',['equipo'=>$equipo])}}">Editar</a>
                            </td>

                            <th>
                                <form action="{{ route('equipo.destroy',['equipo'=>$equipo])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>


                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{ $equipos->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>