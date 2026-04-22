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
                            Crear gabinete
                            <a class="btn btn-danger float-end" href="{{url('gabinete')}}">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('gabinete.store')}}" method="post" enctype="multipart/form-data">
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
                                <label>Marca</label>
                                <input type="text" class="form-control" placeholder="Ingresa Nombre de la marca" name="Marca" value="{{ old('Marca') }}">
                                @error('Marca')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tipo de estuche</label>
                                <input type="text" class="form-control" name="Tipo_de_estuche" placeholder="Ingresa Tipo de estuche" value="{{ old('Tipo_de_estuche') }}">
                                @error('Tipo_de_estuche')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Uso recomendado</label>
                                <input type="text" class="form-control" name="Usos_recomendados_para_el_producto" placeholder="Ingresa uso recomendado" value="{{ old('Usos_recomendados_para_el_producto') }}">
                                @error('Usos_recomendados_para_el_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Color</label>
                                <input type="text" class="form-control" name="Color" placeholder="Ingresa color" value="{{ old('Color') }}">
                                @error('Color')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Material</label>
                                <input type="text" class="form-control" name="Material" placeholder="Ingresa Material" value="{{ old('Material') }}">
                                @error('Material')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Metodo de enfriamiento</label>
                                <input type="text" class="form-control" name="Metodo_de_enfriamiento" placeholder="Ingresa metodo de enfriamiento" value="{{ old('Metodo_de_enfriamiento') }}">
                                @error('Metodo_de_enfriamiento')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Nombre del modelo</label>
                                <input type="text" class="form-control" name="Nombre_del_modelo" placeholder="Ingresa nombre de modelo" value="{{ old('Nombre_del_modelo') }}">
                                @error('Nombre_del_modelo')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Luces de colores</label>
                                <input type="text" class="form-control" name="Luces_de_colores" placeholder="Ingresa luces de colores" value="{{ old('Luces_de_colores') }}">
                                @error('Luces_de_colores')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tamaño de ventilador</label>
                                <input type="number" class="form-control" name="Tamaño_de_ventilador" placeholder="Ingresa tamaño de ventilador" value="{{ old('Tamaño_de_ventilador') }}">
                                @error('Tamaño_de_ventilador')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Descripción</label>
                                <input type="text" class="form-control" name="Descripcion" placeholder="Ingresa descripción" value="{{ old('Descripcion') }}">
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