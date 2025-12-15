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
                        <h4>
                            Agregar una categoria
                            <a class="btn btn-danger float-end" href="{{url('categorium')}}">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('categorium.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input class="form-control" type="text" name="Nombre" value="{{ old('Nombre') }}">
                                @error('Nombre')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <button class="btn btn-primary" type="submit">Crear</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>