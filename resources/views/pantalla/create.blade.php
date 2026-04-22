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

                        <h4>Crear una pantalla
                            <a class="btn btn-danger float-end" href="{{url('pantalla')}}">Regresar</a>
                        </h4>
                        <form action="{{route('pantalla.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')

                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input class="form-control" type="text" name="Nombre_del_producto" placeholder="Ingresa Nombre del producto" value="{{ old('Nombre_del_producto') }}">
                                @error('Nombre_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Resolución</label>
                                <input class="form-control" type="text" name="Resolucion" placeholder="Ingresa Resolución" value="{{ old('Resolucion') }}">
                                @error('Resolucion')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tamaño de la pantalla</label>
                                <input class="form-control" type="text" name="Tamaño_de_la_pantalla" placeholder="Ingresa tamaño de la pantalla" value="{{ old('Tamaño_de_la_pantalla') }}">
                                @error('Tamaño_de_la_pantalla')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror  
                            </div>

                            <div class="mb-3">
                                <label>Descripción de la superficie de la pantalla</label>
                                <input class="form-control" type="text"
                                    name="Descripcion_de_la_superficie_de_la_pantalla" placeholder="Ingresa descripción de la superficie de la pantalla" value="{{ old('Descripcion_de_la_superficie_de_la_pantalla') }}">
                                @error('Descripcion_de_la_superficie_de_la_pantalla')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror    
                            </div>

                            <div class="mb-3">
                                <label>Descripción</label>
                                <input class="form-control" type="text" name="Descripcion" placeholder="Ingresa Descripción" value="{{ old('Descripcion') }}">
                                @error('Descripcion')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="estatusentidad_id">Visibilidad</label>
                                <select class="form-control" name="estatusentidad_id">
                                    <option value="">Selecciona un Visibilidad</option>
                                    @foreach($estatusEntidad as $estatus)
                                    <option value="{{ $estatus->idEstatusEntidad }}" {{ old('estatusentidad_id') == $estatus->idEstatusEntidad ? 'selected' : '' }}>{{ $estatus->Nombre_Estatus }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('estatusentidad_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Imagen</label>
                                <input type="file" class="form-control" name="Portada" value="{{ old('Portada') }}">
                                @error('Portada')
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