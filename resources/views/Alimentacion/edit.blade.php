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
                            Editar alimentación
                            <a class="btn btn-danger float-end" href="{{url('alimentacion')}}">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('alimentacion.update', ['alimentacion'=>$alimentacion])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_producto"
                                    value="{{ old('Nombre_producto',$alimentacion->Nombre_producto) }}">
                                @error('Nombre_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Nombre del modelo</label>
                                <input type="text" class="form-control" name="Nombre_modelo"
                                    value="{{ old('Nombre_modelo',$alimentacion->Nombre_modelo) }}">
                                @error('Nombre_modelo')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Marca</label>
                                <input type="text" class="form-control" name="Marca" value="{{ old('Marca',$alimentacion->Marca) }}">
                                @error('Marca')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Dispositivos compatibles</label>
                                <input type="text" class="form-control" name="Dispositivos_compatibles"
                                    value="{{ old('Dispositivos_compatibles',$alimentacion->Dispositivos_compatibles) }}">
                                @error('Dispositivos_compatibles')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tipo conector</label>
                                <input type="text" class="form-control" name="Tipo_conector"
                                    value="{{ old('Tipo_conector',$alimentacion->Tipo_conector) }}">
                                @error('Tipo_conector')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Potencia de salida</label>
                                <input type="text" class="form-control" name="Potencia_de_salida"
                                    value="{{ old('Potencia_de_salida',$alimentacion->Potencia_de_salida) }}">
                                @error('Potencia_de_salida')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror    
                            </div>


                            <div class="mb-3">
                                <label>Factor de forma</label>
                                <input type="text" class="form-control" name="Factor_de_forma"
                                    value="{{ old('Factor_de_forma',$alimentacion->Factor_de_forma) }}">
                                @error('Factor_de_forma')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Voltaje</label>
                                <input type="text" class="form-control" name="Voltaje"
                                    value="{{ old('Voltaje',$alimentacion->Voltaje) }}">
                                @error('Voltaje')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror   
                            </div>

                            <div class="mb-3">
                                <label>Metodo de enfriamiento</label>
                                <input type="text" class="form-control" name="Metodo_de_enfriamiento"
                                    value="{{ old('Metodo_de_enfriamiento',$alimentacion->Metodo_de_enfriamiento) }}">
                                @error('Metodo_de_enfriamiento')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Dimensiones de articulo</label>
                                <input type="text" class="form-control" name="Dimensiones_de_articulo"
                                    value="{{ old('Dimensiones_de_articulo',$alimentacion->Dimensiones_de_articulo) }}">
                                @error('Dimensiones_de_articulo')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Largo y ancho</label>
                                <input type="text" class="form-control" name="Largo_y_ancho"
                                    value="{{ old('Largo_y_ancho',$alimentacion->Largo_y_ancho) }}">
                                @error('Largo_y_ancho')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Peso del producto</label>
                                <input type="text" class="form-control" name="Peso_del_producto"
                                    value="{{ old('Peso_del_producto',$alimentacion->Peso_del_producto) }}">
                                @error('Peso_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror    
                            </div>

                            <div class="mb-3">
                                <label>Descripción</label>
                                <input type="text" class="form-control" name="Descripcion"
                                    value="{{ old('Descripcion',$alimentacion->Descripcion) }}">
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
                                    @if($estatus->idEstatusEntidad == $alimentacion->estatusentidad_id)
                                    <option selected value="{{ $estatus->idEstatusEntidad }}"  {{ old('estatusentidad_id') == $estatus->idEstatusEntidad ? 'selected' : '' }}>{{
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
                                <label>Portada</label>
                                <input type="file" class="form-control" name="Portada"
                                    value="{{$alimentacion->Portada}}"  value="{{ old('Portada') }}">
                                <img src="{{asset('storage/'.$alimentacion->Portada)}}" alt="image"
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