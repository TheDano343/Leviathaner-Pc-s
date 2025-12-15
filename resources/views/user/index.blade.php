@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>
                        Gestion de usuarios
                    </h4>
                </div>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Roles</th>
                             <th>Acciones</th>
                        </tr>
                    </thead>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->es_admin}}</td>
                        
                        
                        <th>
                            <a class="btn btn-warning"
                                href="{{ route('user.edit',['user'=>$usuario])}}">Editar</a>
                            </th>
                        

                        
                            <th>
                            <form action="{{ route('user.destroy',['user'=>$usuario])}}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Eliminar" />
                            </form>
                            </th>
                        

                    </tr>
                    @endforeach
                </table>
                <div>
                    {{ $usuarios->links('pagination::bootstrap-5') }}
                </div> 
            </div>
        </div>
    </div>
    </div>

    @endsection
</body>

</html>