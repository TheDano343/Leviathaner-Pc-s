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
    <h4>Editar Tarjeta Madre</h4>
    <a class="btn btn-danger float-end" href="{{url('madre')}}">Regresar</a>
</div>    

<div class="card-body">
<form action="{{route('madre.update',['madre'=>$madre])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
            <div class="mb-3">
            <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto" value="{{ old('Nombre_del_producto',$madre->Nombre_del_producto) }}">
            @error('Nombre_del_producto')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>
            

            <div class="mb-3">
                <label>Marca</label>
            <input type="text" class="form-control" name="Marca" value="{{ old('Marca',$madre->Marca) }}">
            @error('Marca')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>
            
            <div class="mb-3">
                <label>Enchufe de CPU</label>
            <input type="text" class="form-control" name="Enchufe_de_CPU" value="{{ old('Enchufe_de_CPU',$madre->Enchufe_de_CPU) }}">
            @error('Enchufe_de_CPU')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>
            
            <div class="mb-3">
                <label>Dispositivos Compatibles</label>
            <input type="text" class="form-control" name="Dispositivos_Compatibles" value="{{ old('Dispositivos_Compatibles',$madre->Dispositivos_Compatibles) }}">
            @error('Dispositivos_Compatibles')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>
            
            <div class="mb-3">
                <label>Tecnologia de la memoria RAM</label>
            <input type="text" class="form-control" name="Tecnologia_de_la_memoria_RAM" value="{{ old('Tecnologia_de_la_memoria_RAM',$madre->Tecnologia_de_la_memoria_RAM) }}">
            @error('Tecnologia_de_la_memoria_RAM')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>
            
            <div class="mb-3">
                <label>Procesadores Compatibles</label>
            <input type="text" class="form-control" name="Procesadores_Compatibles" value="{{ old('Procesadores_Compatibles',$madre->Procesadores_Compatibles) }}">
            @error('Procesadores_Compatibles')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>
            
            <div class="mb-3">
                <label>Tipo de circuitos integrados</label>
            <input type="text" class="form-control" name="Tipo_de_circuitos_integrados" value="{{ old('Tipo_de_circuitos_integrados',$madre->Tipo_de_circuitos_integrados) }}">
            @error('Tipo_de_circuitos_integrados')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Velocidad del reloj de la memoria</label>
            <input type="text" class="form-control" name="Velocidad_del_reloj_de_la_memoria" value="{{ old('Velocidad_del_reloj_de_la_memoria',$madre->Velocidad_del_reloj_de_la_memoria) }}">
            @error('Velocidad_del_reloj_de_la_memoria')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Nombre del modelo</label>
            <input type="text" class="form-control" name="Nombre_del_modelo" value="{{ old('Nombre_del_modelo',$madre->Nombre_del_modelo) }}">
            @error('Nombre_del_modelo')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Capacidad de almacenamiento de la memoria</label>
            <input type="number" class="form-control" name="Capacidad_de_almacenamiento_de_la_memoria" value="{{ old('Capacidad_de_almacenamiento_de_la_memoria',$madre->Capacidad_de_almacenamiento_de_la_memoria) }}">
            @error('Capacidad_de_almacenamiento_de_la_memoria')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Descripción</label>
            <input type="text" class="form-control" name="Descripcion" value="{{ old('Descripcion',$madre->Descripcion) }}">
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
                                    @if($estatus->idEstatusEntidad == $madre->estatusentidad_id)
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
            <img src="{{asset('storage/'.$madre->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">
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