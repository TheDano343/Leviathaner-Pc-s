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
                            Agregar un mouse
                            <a class="btn btn-danger float-end" href="{{url('mouse')}}">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('mouse.store')}}" method="post" enctype="multipart/form-data">
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
                                <label>Marca</label>
                                <input class="form-control" type="text" name="Marca" placeholder="Ingresa Nombre de Marca" value="{{ old('Marca') }}">
                                @error('Marca')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tipo de conectividad</label>
                                <input class="form-control" type="text" name="Tipo_de_conectividad" placeholder="Ingresa Tipo de conectividad" value="{{ old('Tipo_de_conectividad') }}">
                                @error('Tipo_de_conectividad')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tecnologia de detección de movimiento</label>
                                <input class="form-control" type="text" name="Tecnologia_de_deteccion_de_movimiento" placeholder="Ingresa Tecnologia de detección de movimiento" value="{{ old('Tecnologia_de_deteccion_de_movimiento') }}">
                                @error('Tecnologia_de_deteccion_de_movimiento')
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