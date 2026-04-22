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
                            Editar Cpu
                            <a class="btn btn-danger float-end" href="{{url('cpu')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('cpu.update', ['cpu'=>$cpu])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_del_producto"
                                    value="{{ old('Nombre_del_producto',$cpu->Nombre_del_producto) }}">
                                @error('Nombre_del_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Fabricante del CPU</label>
                                <input type="text" class="form-control" name="Fabricante_del_cpu"
                                    value="{{ old('Fabricante_del_cpu',$cpu->Fabricante_del_cpu) }}">
                                @error('Fabricante_del_cpu')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Tegnologia de conectividad</label>
                                <input type="text" class="form-control" name="Modelo_del_cpu"
                                    value="{{ old('Modelo_del_cpu',$cpu->Modelo_del_cpu) }}">
                                @error('Modelo_del_cpu')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Velocidad del cpu</label>
                                <input type="text" class="form-control" name="Velocidad_del_cpu"
                                    value="{{ old('Velocidad_del_cpu',$cpu->Velocidad_del_cpu) }}">
                                @error('Velocidad_del_cpu')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Descripción</label>
                                <input type="text" class="form-control" name="Descripcion"
                                    value="{{ old('Descripcion',$cpu->Descripcion) }}">
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
                                    @if($estatus->idEstatusEntidad == $cpu->estatusentidad_id)
                                    <option selected value="{{ $estatus->idEstatusEntidad }}">{{
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
                                <input type="file" class="form-control" name="Portada" value="{{$cpu->Portada}}">
                                <img src="{{asset('storage/'.$cpu->Portada)}}" alt="image" class="rounded-circle"
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