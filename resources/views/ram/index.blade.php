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
                        Ram
                        <a class="btn btn-primary float-end" href="{{url('ram/create')}}">Agregar ram</a>
                    </h4>
                </div>


                <div class="row">
                    <div class="col-xs-6">
                        <form action="{{route('ram.index')}}" method="GET">
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
                                <th>Marca</th>
                                <th>Tegnologia de la memoria ram</th>
                                <th>Tamaño de la memoria</th>
                                <th>Velocidad de memoria</th>
                                <th>Dispositivos compatibles</th>
                                <th>Descripción</th>
                                <th>Visibilidad</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($rams as $ram)
                        <tr>
                            <td>{{$ram->idRam}}</td>
                            <td>{{$ram->Nombre_del_producto}}</td>
                            <td>{{$ram->Marca}}</td>
                            <td>{{$ram->Tegnologia_de_la_memoria_ram}}</td>
                            <td>{{$ram->Tamaño_de_la_memoria}}</td>
                            <td>{{$ram->Velocidad_de_memoria}}</td>
                            <td>{{$ram->Dispositivos_compatibles}}</td>
                            <td>{{$ram->Descripcion}}</td>
                            <td>{{$ram->Estatus->Nombre_Estatus}}</td>

                            <td><img src="{{asset('storage/'.$ram->Portada)}}" alt="image" class="rounded-circle"
                                    width="50" height="50"></td>

                            
                            
                            <th><a class="btn btn-warning" href="{{route('ram.edit', ['ram'=>$ram])}}">Editar</a></th>
                            

                            
                            <th>
                                <form action="{{route('ram.destroy', ['ram'=>$ram])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>
                            

                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{ $rams->appends(['busqueda'=>$busqueda]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>