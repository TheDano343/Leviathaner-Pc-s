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
                            Editar pantalla
                            <a class="btn btn-danger float-end" href="{{url('pantalla')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('pantalla.update',['pantalla'=>$pantalla])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_del_producto"
                                    value="{{ old('Nombre_del_producto',$pantalla->Nombre_del_producto) }}">
                                @error('Nombre_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Resolución</label>
                                <input type="text" class="form-control" name="Resolucion"
                                    value="{{ old('Resolucion',$pantalla->Resolucion) }}">
                                @error('Resolucion')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tamaño de la pantalla</label>
                                <input type="text" class="form-control" name="Tamaño_de_la_pantalla"
                                    value="{{ old('Tamaño_de_la_pantalla',$pantalla->Tamaño_de_la_pantalla) }}">
                                @error('Tamaño_de_la_pantalla')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror  
                            </div>

                            <div class="mb-3">
                                <label>Descripción de la superficie de la pantalla</label>
                                <input type="text" class="form-control"
                                    name="Descripcion_de_la_superficie_de_la_pantalla"
                                    value="{{ old('Descripcion_de_la_superficie_de_la_pantalla',$pantalla->Descripcion_de_la_superficie_de_la_pantalla) }}">
                                @error('Descripcion_de_la_superficie_de_la_pantalla')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror 
                            </div>

                            <div class="mb-3">
                                <label>Descripción</label>
                                <input type="text" class="form-control" name="Descripcion"
                                    value="{{ old('Descripcion',$pantalla->Descripcion) }}">
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
                                    @if($estatus->idEstatusEntidad == $pantalla->estatusentidad_id)
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
                                <img src="{{asset('storage/'.$pantalla->Portada)}}" alt="image" class="rounded-circle"
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