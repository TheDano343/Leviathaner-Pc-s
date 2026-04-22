@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Crear alimentación
                            <a class="btn btn-danger float-end" href="{{url('alimentacion')}}">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('alimentacion.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')

                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_producto" placeholder="Ingresa Nombre del producto" value="{{ old('Nombre_producto') }}">
                                @error('Nombre_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Nombre del modelo</label>
                                <input type="text" class="form-control" name="Nombre_modelo" placeholder="Ingresa Nombre del modelo" value="{{ old('Nombre_modelo') }}">
                                @error('Nombre_modelo')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Marca</label>
                                <input type="text" class="form-control" name="Marca" placeholder="Ingresa Nombre de la marca" value="{{ old('Marca') }}">
                                @error('Marca')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Dispositivos compatibles</label>
                                <input type="text" class="form-control" name="Dispositivos_compatibles" placeholder="Ingresa Dispositivos compatibles" value="{{ old('Dispositivos_compatibles') }}">
                                @error('Dispositivos_compatibles')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Tipo conector</label>
                                <input type="text" class="form-control" name="Tipo_conector" placeholder="Ingresa Tipo conector" value="{{ old('Tipo_conector') }}">
                                @error('Tipo_conector')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Potencia de salida</label>
                                <input type="text" class="form-control" name="Potencia_de_salida" placeholder="Ingresa Potencia de salida" value="{{ old('Potencia_de_salida') }}">
                                @error('Potencia_de_salida')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>




                            <div class="mb-3">
                                <label>Factor de forma</label>
                                <input type="text" class="form-control" name="Factor_de_forma" placeholder="Ingresa Factor de forma" value="{{ old('Factor_de_forma') }}">
                                @error('Factor_de_forma')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Voltaje</label>
                                <input type="text" class="form-control" name="Voltaje" placeholder="Ingresa Voltaje" value="{{ old('Voltaje') }}">
                                @error('Voltaje')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Metodo de enfriamiento</label>
                                <input type="text" class="form-control" name="Metodo_de_enfriamiento" placeholder="Ingresa Metodo de enfriamiento" value="{{ old('Metodo_de_enfriamiento') }}">
                                @error('Metodo_de_enfriamiento')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Dimensiones de articulo</label>
                                <input type="text" class="form-control" name="Dimensiones_de_articulo" placeholder="Ingresa Dimensiones de articulo" value="{{ old('Dimensiones_de_articulo') }}">
                                @error('Dimensiones_de_articulo')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label>Largo y ancho</label>
                                <input type="text" class="form-control" name="Largo_y_ancho" placeholder="Ingresa Largo y ancho" value="{{ old('Largo_y_ancho') }}">
                                @error('Largo_y_ancho')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            

                            <div class="mb-3">
                                <label>Peso del producto</label>
                                <input type="text" class="form-control" name="Peso_del_producto" placeholder="Ingresa Peso del producto" value="{{ old('Peso_del_producto') }}">
                                @error('Peso_del_producto')
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

                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
</body>

</html>