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
                            Editar procesador
                            <a class="btn btn-danger float-end" href="{{url('procesador')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('procesador.update', ['procesador'=>$procesador])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_del_producto"
                                    value="{{ old('Nombre_del_producto',$procesador->Nombre_del_producto) }}">
                                @error('Nombre_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Marca</label>
                                <input type="text" class="form-control" name="Marca" value="{{ old('Marca',$procesador->Marca) }}">
                                @error('Marca')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Fabricante del CPU</label>
                                <input type="text" class="form-control" name="Fabricante_del_CPU"
                                    value="{{ old('Fabricante_del_CPU',$procesador->Fabricante_del_CPU) }}">
                                @error('Fabricante_del_CPU')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Modelo del CPU</label>
                                <input type="text" class="form-control" name="Modelo_del_CPU"
                                    value="{{ old('Modelo_del_CPU',$procesador->Modelo_del_CPU) }}">
                                    @error('Modelo_del_CPU')
                                    <span>{{ $message }}</span>
                                    <br>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label>Velocidad del CPU</label>
                                <input type="text" class="form-control" name="Velocidad_del_CPU"
                                    value="{{ old('Velocidad_del_CPU',$procesador->Velocidad_del_CPU) }}">
                                @error('Velocidad_del_CPU')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Enchufe del CPU</label>
                                <input type="text" class="form-control" name="Enchufe_del_CPU"
                                    value="{{ old('Enchufe_del_CPU',$procesador->Enchufe_del_CPU) }}">
                                @error('Enchufe_del_CPU')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Descripcion</label>
                                <input type="text" class="form-control" name="Descripcion"
                                    value="{{ old('Descripcion',$procesador->Descripcion) }}">
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
                                    @if($estatus->idEstatusEntidad == $procesador->estatusentidad_id)
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
                                <img src="{{asset('storage/'.$procesador->Portada)}}" alt="image" class="rounded-circle"
                                    width="50" height="50">
                                @error('Portada')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>


                            <button class="btn btn-primary" type="submit">Actualizar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>