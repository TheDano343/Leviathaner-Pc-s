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

                        <h4>Agregar un CPU
                            <a class="btn btn-danger float-end" href="{{url('cpu')}}">Regresar</a>
                        </h4>
                        <form action="{{route('cpu.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_del_producto" placeholder="Ingresa Nombre del producto" value="{{ old('Nombre_del_producto') }}">
                                @error('Nombre_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Fabricante del CPU</label>
                                <input type="text" class="form-control" name="Fabricante_del_cpu" placeholder="Ingresa Nombre del Fabricante del CPU" value="{{ old('Fabricante_del_cpu') }}">
                                @error('Fabricante_del_cpu')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Modelo del cpu</label>
                                <input type="text" class="form-control" name="Modelo_del_cpu" placeholder="Ingresa Nombre del Modelo del cpu" value="{{ old('Modelo_del_cpu') }}">
                                @error('Modelo_del_cpu')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Velocidad del cpu</label>
                                <input type="text" class="form-control" name="Velocidad_del_cpu" placeholder="Ingresa Velocidad del cpu" value="{{ old('Velocidad_del_cpu') }}">
                                @error('Velocidad_del_cpu')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Descripción</label>
                                <input type="text" class="form-control" name="Descripcion" placeholder="Ingresa Descripción" value="{{ old('Descripcion') }}">
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
                                <label>Portada</label>
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