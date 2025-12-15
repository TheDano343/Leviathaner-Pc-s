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
                        Tarjeta Grafica
                        <a class="btn btn-primary float-end" href="{{url('grafica/create')}}">Agregar una grafica</a>
                    </h4>
                </div>

                <div class="row">

                    <div class="col-xs-6">
                        <form action="{{route('grafica.index')}}" method="GET">
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
                                <th>Coprocesador</th>
                                <th>Marca</th>
                                <th>RAM</th>
                                <th>Descripción</th>
                                <th>Visibilidad</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($graficas as $grafica)
                        <tr>
                            <td>{{$grafica->idTarjetaGrafica}}</td>
                            <td>{{$grafica->Nombre_del_producto}}</td>
                            <td>{{$grafica->Coprocesador}}</td>
                            <td>{{$grafica->Marca}}</td>
                            <td>{{$grafica->Ram_para_graficos}}</td>
                            <td>{{$grafica->Descripcion}}</td>
                            <td>{{$grafica->Estatus->Nombre_Estatus}}</td>

                            <td><img src="{{asset('storage/'.$grafica->Portada)}}" alt="image" class="rounded-circle"
                                    width="50" height="50"></td>


                            
                            <th><a class="btn btn-warning"
                                    href="{{route('grafica.edit', ['grafica'=>$grafica])}}">Editar</a></th>
                            

                            
                            <th>
                                <form action="{{route('grafica.destroy', ['grafica'=>$grafica])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>
                            

                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{ $graficas->appends(['busqueda'=>$busqueda]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection


</body>

</html>