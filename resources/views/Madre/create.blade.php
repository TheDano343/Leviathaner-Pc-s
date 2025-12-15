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
        Agregar Tarjeta Madre
        <a class="btn btn-danger float-end" href="{{url('madre')}}">Regresar</a>
    </h4>
    </div>

<div class="card-body">
<form action="{{route('madre.store')}}" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="Marca" placeholder="Ingresa Nombre de Marca" value="{{ old('Marca') }}">
            @error('Marca')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>
        
            <div class="mb-3">
                <label>Enchufe de CPU</label>
            <input type="text" class="form-control" name="Enchufe_de_CPU" placeholder="Ingresa Enchufe de CPU" value="{{ old('Enchufe_de_CPU') }}">
            @error('Enchufe_de_CPU')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>
        
            <div class="mb-3">
                <label>Dispositivos Compatibles</label>
            <input type="text" class="form-control" name="Dispositivos_Compatibles" placeholder="Ingresa Dispositivos Compatibles" value="{{ old('Dispositivos_Compatibles') }}">
            @error('Dispositivos_Compatibles')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Tecnologia de la memoria RAM</label>
            <input type="text" class="form-control" name="Tecnologia_de_la_memoria_RAM" placeholder="Ingresa Tecnologia de la memoria RAM" value="{{ old('Tecnologia_de_la_memoria_RAM') }}">
            @error('Tecnologia_de_la_memoria_RAM')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Procesadores Compatibles</label>
            <input type="text" class="form-control" name="Procesadores_Compatibles" placeholder="Ingresa Procesadores Compatible" value="{{ old('Procesadores_Compatibles') }}">
            @error('Procesadores_Compatibles')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Tipo de circuitos integrados</label>
            <input type="text" class="form-control" name="Tipo_de_circuitos_integrados" placeholder="Ingresa Tipos de circuitos integrados" value="{{ old('Tipo_de_circuitos_integrados') }}">
            @error('Tipo_de_circuitos_integrados')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Velocidad del reloj de la memoria</label>
            <input type="text" class="form-control" name="Velocidad_del_reloj_de_la_memoria" placeholder="Ingresa Velocidad del reloj de la memoria" value="{{ old('Velocidad_del_reloj_de_la_memoria') }}">
            @error('Velocidad_del_reloj_de_la_memoria')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Nombre del modelo</label>
            <input type="text" class="form-control" name="Nombre_del_modelo" placeholder="Ingresa Nombre del modelo" value="{{ old('Nombre_del_modelo') }}">
            @error('Nombre_del_modelo')
            <span>{{ $message }}</span>
            <br>
            @enderror
            </div>

            <div class="mb-3">
                <label>Capacidad de almacenamiento de la memoria</label>
            <input type="number" class="form-control" name="Capacidad_de_almacenamiento_de_la_memoria" placeholder="Ingresa Capacidad de almacenamiento de la memoria" value="{{ old('Capacidad_de_almacenamiento_de_la_memoria') }}">
            @error('Capacidad_de_almacenamiento_de_la_memoria')
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
                        <option value="{{ $estatus->idEstatusEntidad }}" {{ old('estatusentidad_id') == $estatus->idEstatusEntidad ? 'selected' : '' }}>{{ $estatus->Nombre_Estatus }}</option>
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