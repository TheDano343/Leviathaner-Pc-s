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
                            Editar teclados
                            <a class="btn btn-danger float-end" href="{{url('teclado')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('teclado.update', ['teclado'=>$teclado])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_del_producto"
                                    value="{{ old('Nombre_del_producto',$teclado->Nombre_del_producto) }}">
                                @error('Nombre_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror   
                            </div>

                            <div class="mb-3">
                                <label>Dispositivos compatibles</label>
                                <input type="text" class="form-control" name="Dispositivos_compatibles"
                                    value="{{ old('Dispositivos_compatibles',$teclado->Dispositivos_compatibles) }}">
                                @error('Dispositivos_compatibles')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tegnologia de conectividad</label>
                                <input type="text" class="form-control" name="Tegnologia_de_conectividad"
                                    value="{{ old('Tegnologia_de_conectividad',$teclado->Tegnologia_de_conectividad) }}">
                                @error('Tegnologia_de_conectividad')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Descripción del teclado</label>
                                <input type="text" class="form-control" name="Descripcion_del_teclado"
                                    value="{{ old('Descripcion_del_teclado',$teclado->Descripcion_del_teclado) }}">
                                @error('Descripcion_del_teclado')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Usos recomendados para producto</label>
                                <input type="text" class="form-control" name="Usos_recomendados_para_producto"
                                    value="{{ old('Usos_recomendados_para_producto',$teclado->Usos_recomendados_para_producto) }}">
                                @error('Usos_recomendados_para_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">

                                <label>Caracteristica especial</label>
                                <input type="text" class="form-control" name="Caracteristica_especial"
                                    value="{{ old('Caracteristica_especial',$teclado->Caracteristica_especial) }}">
                                @error('Caracteristica_especial')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Color</label>
                                <input type="text" class="form-control" name="Color" value="{{ old('Color',$teclado->Color) }}">
                                @error('Color')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Descripción</label>
                                <input type="text" class="form-control" name="Descripcion"
                                    value="{{ old('Descripcion',$teclado->Descripcion) }}">
                                @error('Descripcion')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="estatusentidad_id">Visibilidad</label>
                                <select class="form-control" name="estatusentidad_id">
                                    <option value="">Selecciona un Visibilidad</option>
                                    @foreach($estatusEntidades as $estatus)
                                    @if($estatus->idEstatusEntidad == $teclado->estatusentidad_id)
                                    <option selected value="{{ $estatus->idEstatusEntidad }}" {{ old('estatusentidad_id') == $estatus->idEstatusEntidad ? 'selected' : '' }}>{{
                                        $estatus->Nombre_Estatus }}</option>
                                    @else
                                    <option value="{{ $estatus->idEstatusEntidad }}">{{ $estatus->Nombre_Estatus }}
                                    </option>
                                    @endif
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
                                <img src="{{asset('storage/'.$teclado->Portada)}}" alt="image" class="rounded-circle"
                                    width="50" height="50">
                                 @error('Portada')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
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