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
                        Categorias
                        <a class="btn btn-primary float-end" href="{{url('categorium/create')}}">Agregar una
                            categoria</a>
                    </h4>
                </div>
                <table class="table table-responsive table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Nombre de categoria</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach($categorium as $categorium)
                    <tr>
                        <td>{{$categorium->idCategoria }}</td>
                        <td>{{$categorium->Nombre}}</td>
                        
                        
                        <th>
                            <a class="btn btn-warning"
                                href="{{route('categorium.edit', ['categorium'=>$categorium])}}">Editar</a>
                        </th>
                        

                        
                        <th>
                            <form action="{{route('categorium.destroy', ['categorium'=>$categorium])}}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Eliminar" />
                            </form>
                        </th>
                        


                    </tr>
                    @endforeach
                </table>
                <div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection

</body>

</html>