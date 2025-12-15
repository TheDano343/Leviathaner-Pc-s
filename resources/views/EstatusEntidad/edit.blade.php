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
                <div class="card">

                    <div class="card-header">
                        <h4>Editar gabinete
                            <a class="btn btn-danger float-end" href="{{url('estatusEntidad')}}">Regresar</a>
                        </h4>

                    </div>

                    <div class="card-body">
                        <form action="{{route('estatusEntidad.update', ['estatusEntidad'=>$estatusEntidad])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_Estatus" value="{{$estatusEntidad->Nombre_Estatus}}">
                            </div>

                            <button class="btn btn-primary" type="submit">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection

</body>

</html>