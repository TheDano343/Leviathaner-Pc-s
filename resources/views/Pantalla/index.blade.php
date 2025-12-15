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
                        Pantallas
                        <a class="btn btn-primary float-end" href="{{url('pantalla/create')}}">Agregar una pantalla</a>
                    </h4>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <form action="{{route('pantalla.index')}}" method="GET">
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
                        <tr>
                            <th>Id</th>
                            <th>Nombre del producto</th>
                            <th>Resolución</th>
                            <th>Tamaño de la pantalla</th>
                            <th>Descripción de la superficie de la pantalla</th>
                            <th>Descripción</th>
                            <th>Visibilidad</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($pantallas as $pantalla)
                        <tr>
                            <td>{{$pantalla->idPantallas }}</td>
                            <td>{{$pantalla->Nombre_del_producto}}</td>
                            <td>{{$pantalla->Resolucion}}</td>
                            <td>{{$pantalla->Tamaño_de_la_pantalla}}</td>
                            <td>{{$pantalla->Descripcion_de_la_superficie_de_la_pantalla}}</td>
                            <td>{{$pantalla->Descripcion}}</td>
                            <td>{{$pantalla->Estatus->Nombre_Estatus}}</td>

                            <td><img src="{{asset('storage/'.$pantalla->Portada)}}" alt="image" class="rounded-circle"
                                    width="50" height="50"></td>

                            
                            <th>
                                <a class="btn btn-warning"
                                    href="{{route('pantalla.edit', ['pantalla'=>$pantalla])}}">Editar</a>
                            </th>
                            
                            <th>
                                <form action="{{route('pantalla.destroy', ['pantalla'=>$pantalla])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>

                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{ $pantallas->appends(['busqueda'=>$busqueda]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>