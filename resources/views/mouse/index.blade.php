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
                        Mouses
                        <a class="btn btn-primary float-end" href="{{url('mouse/create')}}">Agregar un mouse</a>
                    </h4>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <form action="{{route('mouse.index')}}" method="GET">
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
                            <th>Marca</th>
                            <th>Tipo de conectividad</th>
                            <th>Tecnologia de deteccion de movimiento</th>
                            <th>Descripción</th>
                            <th>Visibilidad</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($mouses as $mouse)
                        <tr>
                            <td>{{$mouse->idMouse }}</td>
                            <td>{{$mouse->Nombre_del_producto}}</td>
                            <td>{{$mouse->Marca}}</td>
                            <td>{{$mouse->Tipo_de_conectividad}}</td>
                            <td>{{$mouse->Tecnologia_de_deteccion_de_movimiento}}</td>
                            <td>{{$mouse->Descripcion}}</td>
                            <td>{{$mouse->Estatus->Nombre_Estatus}}</td>

                            <td><img src="{{asset('storage/'.$mouse->Portada)}}" alt="image" class="rounded-circle"
                                    width="50" height="50"></td>

                            
                            <th>
                                <a class="btn btn-warning" href="{{route('mouse.edit', ['mouse'=>$mouse])}}">Editar</a>
                            </th>
                            

                            
                            <th>
                                <form action="{{route('mouse.destroy', ['mouse'=>$mouse])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>
                            


                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{ $mouses->appends(['busqueda'=>$busqueda]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>