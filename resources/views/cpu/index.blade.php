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
                        Cpu
                        <a class="btn btn-primary float-end" href="{{url('cpu/create')}}">Agregar Cpu</a>
                    </h4>
                </div>

                <div class="row">

                    <div class="col-xs-6">
                        <form action="{{route('cpu.index')}}" method="GET">
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
                                <th>Fabricante del cpu</th>
                                <th>Modelo del cpu</th>
                                <th>Velocidad del cpu</th>
                                <th>Descripción</th>
                                <th>Visibilidad</th>
                                <th>Portada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($cpus as $cpu)
                        <tr>
                            <td>{{$cpu->idCpu}}</td>
                            <td>{{$cpu->Nombre_del_producto}}</td>
                            <td>{{$cpu->Fabricante_del_cpu}}</td>
                            <td>{{$cpu->Modelo_del_cpu}}</td>
                            <td>{{$cpu->Velocidad_del_cpu}}</td>
                            <td>{{$cpu->Descripcion}}</td>
                            <td>{{$cpu->Estatus->Nombre_Estatus}}</td>
                            <td><img src="{{asset('storage/'.$cpu->Portada)}}" alt="image" class="rounded-circle"
                                    width="50" height="50"></td>

                            
                            <th><a class="btn btn-warning" href="{{ route('cpu.edit',['cpu'=>$cpu])}}">Editar</a></th>
                            

                            
                            <th>
                                <form action="{{ route('cpu.destroy',['cpu'=>$cpu])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>
                            


                        </tr>
                        @endforeach
                    </table>
                    <div>
                        {{ $cpus->appends(['busqueda'=>$busqueda]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>