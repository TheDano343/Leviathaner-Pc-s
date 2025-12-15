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

                        <h4>Agregar un teclado
                            <a class="btn btn-danger float-end" href="{{url('teclado')}}">Regresar</a>
                        </h4>
                        <form action="{{route('teclado.store')}}" method="post" enctype="multipart/form-data">
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
                                <label>Dispositivos compatibles</label>
                                <input type="text" class="form-control" name="Dispositivos_compatibles" placeholder="Ingresa Nombre de dispositivos compatibles" value="{{ old('Dispositivos_compatibles') }}">
                                @error('Dispositivos_compatibles')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tegnologia de conectividad</label>
                                <input type="text" class="form-control" name="Tegnologia_de_conectividad" placeholder="Ingresa Tegnologia de conectividad" value="{{ old('Tegnologia_de_conectividad') }}">
                                @error('Tegnologia_de_conectividad')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Descripción del teclado</label>
                                <input type="text" class="form-control" name="Descripcion_del_teclado" placeholder="Ingresa Descripción del teclado" value="{{ old('Descripcion_del_teclado') }}">
                                @error('Descripcion_del_teclado')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Usos recomendados para producto</label>
                                <input type="text" class="form-control" name="Usos_recomendados_para_producto" placeholder="Ingresa Usos recomendados para producto" value="{{ old('Usos_recomendados_para_producto') }}">
                                @error('Usos_recomendados_para_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Caracteristica especial</label>
                                <input type="text" class="form-control" name="Caracteristica_especial" placeholder="Ingresa Caracteristica especial" value="{{ old('Caracteristica_especial') }}">
                                @error('Caracteristica_especial')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Color</label>
                                <input type="text" class="form-control" name="Color" placeholder="Ingresa Color" value="{{ old('Color') }}">
                                @error('Color')
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