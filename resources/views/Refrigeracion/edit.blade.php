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
                            Editar refrigeracion
                            <a class="btn btn-danger float-end" href="{{url('refrigeracion')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('refrigeracion.update', ['refrigeracion'=>$refrigeracion])}}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_del_producto"
                                    value="{{old('Nombre_del_producto',$refrigeracion->Nombre_del_producto)}}">
                                @error('Nombre_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Dimensiones del producto</label>
                                <input type="text" class="form-control" name="Dimensiones_del_producto"
                                    value="{{ old('Dimensiones_del_producto',$refrigeracion->Dimensiones_del_producto) }}">
                                @error('Dimensiones_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Voltaje</label>
                                <input type="text" class="form-control" name="Voltaje"
                                    value="{{ old('Voltaje',$refrigeracion->Voltaje) }}">
                                @error('Voltaje')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Metodo de enfriamiento</label>
                                <input type="text" class="form-control" name="Metodo_de_enfriamiento"
                                    value="{{ old('Metodo_de_enfriamiento',$refrigeracion->Metodo_de_enfriamiento) }}">
                                @error('Metodo_de_enfriamiento')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Dispositivos compatibles</label>
                                <input type="text" class="form-control" name="Dispositivos_compatibles"
                                    value="{{ old('Dispositivos_compatibles',$refrigeracion->Dispositivos_compatibles) }}">
                                @error('Dispositivos_compatibles')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Nivel de ruido</label>
                                <input type="text" class="form-control" name="Nivel_de_ruido"
                                    value="{{ old('Nivel_de_ruido',$refrigeracion->Nivel_de_ruido) }}">
                                @error('Nivel_de_ruido')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Material</label>
                                <input type="text" class="form-control" name="Material"
                                    value="{{ old('Material',$refrigeracion->Material) }}">
                                @error('Material')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Velocidad maxima de rotación</label>
                                <input type="text" class="form-control" name="Velocidad_maxima_de_rotacion"
                                    value="{{ old('Velocidad_maxima_de_rotacion',$refrigeracion->Velocidad_maxima_de_rotacion) }}">
                                @error('Velocidad_maxima_de_rotacion')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror    
                            </div>

                            <div class="mb-3">
                                <label>Descripción</label>
                                <input type="text" class="form-control" name="Descripcion"
                                    value="{{ old('Descripcion',$refrigeracion->Descripcion) }}">
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
                                    @if($estatus->idEstatusEntidad == $refrigeracion->estatusentidad_id)
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
                                <img src="{{asset('storage/'.$refrigeracion->Portada)}}" alt="image"
                                    class="rounded-circle" width="50" height="50">
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