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
                        <h4>Editar gabinete
                            <a class="btn btn-danger float-end" href="{{url('gabinete')}}">Regresar</a>
                        </h4>

                    </div>

                    <div class="card-body">
                        <form action="{{route('gabinete.update', ['gabinete'=>$gabinete])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_del_producto"
                                    value="{{ old('Nombre_del_producto',$gabinete->Nombre_del_producto) }}">
                                 @error('Nombre_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Marca</label>
                                <input type="text" class="form-control" name="Marca" value="{{ old('Marca',$gabinete->Marca) }}">
                                @error('Marca')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tipo de estuche</label>
                                <input type="text" class="form-control" name="Tipo_de_estuche"
                                    value="{{ old('Tipo_de_estuche',$gabinete->Tipo_de_estuche) }}">
                                @error('Tipo_de_estuche')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Usos recomendados para el producto</label>
                                <input type="text" class="form-control" name="Usos_recomendados_para_el_producto"
                                    value="{{ old('Usos_recomendados_para_el_producto',$gabinete->Usos_recomendados_para_el_producto) }}">
                                @error('Usos_recomendados_para_el_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Color</label>
                                <input type="text" class="form-control" name="Color" value="{{ old('Color',$gabinete->Color) }}">
                                @error('Color')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Material</label>
                                <input type="text" class="form-control" name="Material" value="{{ old('Material',$gabinete->Material) }}">
                                 @error('Material')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Metodo de enfriamiento</label>
                                <input type="text" class="form-control" name="Metodo_de_enfriamiento"
                                    value="{{ old('Metodo_de_enfriamiento',$gabinete->Metodo_de_enfriamiento) }}">
                                @error('Metodo_de_enfriamiento')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Nombre del modelo</label>
                                <input type="text" class="form-control" name="Nombre_del_modelo"
                                    value="{{ old('Nombre_del_modelo',$gabinete->Nombre_del_modelo) }}">
                                @error('Nombre_del_modelo')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Luces de colores</label>
                                <input type="text" class="form-control" name="Luces_de_colores"
                                    value="{{ old('Luces_de_colores',$gabinete->Luces_de_colores) }}">
                                @error('Luces_de_colores')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tamaño de ventilador</label>
                                <input type="number" class="form-control" name="Tamaño_de_ventilador"
                                    value="{{ old('Tamaño_de_ventilador',$gabinete->Tamaño_de_ventilador) }}">
                                @error('Tamaño_de_ventilador')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Descripcion</label>
                                <input type="text" class="form-control" name="Descripcion"
                                    value="{{ old('Descripcion',$gabinete->Descripcion) }}">
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
                                    @if($estatus->idEstatusEntidad == $gabinete->estatusentidad_id)
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
                                <img src="{{asset('storage/'.$gabinete->Portada)}}" alt="image" class="rounded-circle"
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