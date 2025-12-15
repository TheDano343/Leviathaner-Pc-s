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
                        Refrigeración
                        <a class="btn btn-primary float-end" href="{{url('refrigeracion/create')}}">Agregar
                            refrigeración</a>
                    </h4>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <form action="{{route('refrigeracion.index')}}" method="GET">
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
                                <th>Dimensiones del producto</th>
                                <th>Voltaje</th>
                                <th>Vataje</th>
                                <th>Metodo de enfriamiento</th>
                                <th>Dispositivos compatibles</th>
                                <th>Nivel de ruido</th>
                                <th>Material</th>
                                <th>Velocidad maxima de rotación</th>
                                <th>Descripción</th>
                                <th>Visibilidad</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($refrigeraciones as $refrigeracion)
                        <tr>
                            <td>{{$refrigeracion->idSistema_refrigeracion}}</td>
                            <td>{{$refrigeracion->Nombre_del_producto}}</td>
                            <td>{{$refrigeracion->Dimensiones_del_producto}}</td>
                            <td>{{$refrigeracion->Voltaje}}</td>
                            <td>{{$refrigeracion->Vataje}}</td>
                            <td>{{$refrigeracion->Metodo_de_enfriamiento}}</td>
                            <td>{{$refrigeracion->Dispositivos_compatibles}}</td>
                            <td>{{$refrigeracion->Nivel_de_ruido}}</td>
                            <td>{{$refrigeracion->Material}}</td>
                            <td>{{$refrigeracion->Velocidad_maxima_de_rotacion}}</td>
                            <td>{{$refrigeracion->Descripcion}}</td>
                            <td>{{$refrigeracion->Estatus->Nombre_Estatus}}</td>

                            <td><img src="{{asset('storage/'.$refrigeracion->Portada)}}" alt="image"
                                    class="rounded-circle" width="50" height="50"></td>



                           
                            <th><a class="btn btn-warning"
                                    href="{{route('refrigeracion.edit', ['refrigeracion'=>$refrigeracion])}}">Editar</a>
                            </th>
                           

                            
                            <th>
                                <form action="{{route('refrigeracion.destroy', ['refrigeracion'=>$refrigeracion])}}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>
                            


                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{ $refrigeraciones->appends(['busqueda'=>$busqueda]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>