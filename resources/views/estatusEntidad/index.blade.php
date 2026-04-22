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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>
                        Estatus Entidades
                        <a class="btn btn-primary float-end" href="{{url('estatusEntidad/create')}}">Agregar estatus
                            entidad</a>
                    </h4>
                </div>


                <div class="row">

                    <div class="col-xs-6">
                        <form action="{{route('estatusEntidad.index')}}" method="GET">
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
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($estatus as $estatu)
                        <tr>
                            <td>{{$estatu->idEstatusEntidad}}</td>
                            <td>{{$estatu->Nombre_Estatus}}</td>

                            
                            <th>
                                <a class="btn btn-warning"
                                    href="{{ route('estatusEntidad.edit',['estatusEntidad'=>$estatu])}}">Editar</a>
                            </th>
                           

                            
                            <th>
                                <form action="{{ route('estatusEntidad.destroy',['estatusEntidad'=>$estatu])}}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>
                            

                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>