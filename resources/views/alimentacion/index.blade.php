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
                        Alimentación
                        <a class="btn btn-primary float-end" href="{{url('alimentacion/create')}}">Agregar fuente de
                            alimentación</a>
                    </h4>
                </div>

                <div class="row">

                    <div class="col-xs-6">
                        <form action="{{route('alimentacion.index')}}" method="GET">
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
                                <th>Nombre del modelo</th>
                                <th>Marca</th>
                                <th>Dispositivos compatibles</th>
                                <th>Tipo conector</th>
                                <th>Potencia de la salida</th>
                                <th>Factor de forma</th>
                                <th>Voltaje</th>
                                <th>Metodo de enfriamiento</th>
                                <th>Dimensiones de articulo</th>
                                <th>Largo y ancho</th>
                                <th>Peso del producto</th>
                                <th>Descripción</th>
                                <th>Visibilidad</th>
                                <th>Portada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($alimentaciones as $alimentacion)
                        <tr>
                            <td>{{$alimentacion->idAlimentacion}}</td>
                            <td>{{$alimentacion->Nombre_producto}}</td>
                            <td>{{$alimentacion->Nombre_modelo}}</td>
                            <td>{{$alimentacion->Marca}}</td>
                            <td>{{$alimentacion->Dispositivos_compatibles}}</td>
                            <td>{{$alimentacion->Tipo_conector}}</td>
                            <td>{{$alimentacion->Potencia_de_salida}}</td>
                            <td>{{$alimentacion->Factor_de_forma}}</td>
                            <td>{{$alimentacion->Voltaje}}</td>
                            <td>{{$alimentacion->Metodo_de_enfriamiento}}</td>
                            <td>{{$alimentacion->Dimensiones_de_articulo}}</td>
                            <td>{{$alimentacion->Largo_y_ancho}}</td>
                            <td>{{$alimentacion->Peso_del_producto}}</td>
                            <td>{{$alimentacion->Descripcion}}</td>
                            <td>{{$alimentacion->Estatus->Nombre_Estatus}}</td>

                            <td><img src="{{asset('storage/'.$alimentacion->Portada)}}" alt="image"
                                    class="rounded-circle" width="50" height="50"></td>


                            
                            <th>
                                <a class="btn btn-warning"
                                    href="{{route('alimentacion.edit', ['alimentacion' => $alimentacion])}}">Editar</a>
                            </th>
                            

                            
                            <th>
                                <form action="{{ route('alimentacion.destroy',['alimentacion'=>$alimentacion])}}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>
                            

                            <td>
                            <th>

                            </th>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{ $alimentaciones->appends(['busqueda'=>$busqueda]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>