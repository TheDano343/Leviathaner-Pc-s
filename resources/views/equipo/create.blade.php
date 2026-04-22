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

                        <h4>Agregar un equipo
                            <a class="btn btn-danger float-end" href="{{url('equipo')}}">Regresar</a>
                        </h4>
                        <form action="{{route('equipo.store')}}" method="post">
                            @csrf
                            @method('post')

                            <div class="form-group">
                                <label>Nombre producto</label>
                                <input class="form-control" type="text" name="Nombre_producto" value="{{ old('Nombre_producto') }}">
                                @error('Nombre_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Tipo de tarjeta grafica</label>
                                <input class="form-control" type="text" name="Tipo_de_tarjeta_grafica" value="{{ old('Tipo_de_tarjeta_grafica') }}">
                                @error('Tipo_de_tarjeta_grafica')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="procecadores_id">Procesadores</label>
                                <select class="form-control" name="procecadores_id">
                                    <option value="">Selecciona un Procesador</option>
                                    @foreach($procesadores as $procesador)
                                    <option value="{{ $procesador->idProcesador  }}" {{ old('procecadores_id') == $procesador->idProcesador ? 'selected' : '' }}>{{ $procesador->Nombre_del_producto
                                        }}</option>
                                    @endforeach
                                </select>
                                @error('procecadores_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gabinetes_id">Gabinetes</label>
                                <select class="form-control" name="gabinetes_id">
                                    <option value="">Selecciona un gabinete</option>
                                    @foreach($gabinetes as $gabinete)
                                    <option value="{{ $gabinete->idGabinetes }}" {{ old('gabinetes_id') == $gabinete->idGabinetes ? 'selected' : '' }}>{{ $gabinete->Nombre_del_producto }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('gabinetes_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pantallas_id">Pantalla</label>
                                <select class="form-control" name="pantallas_id">
                                    <option value="">Selecciona una pantalla</option>
                                    @foreach($pantallas as $pantalla)
                                    <option value="{{ $pantalla->idPantallas  }}" {{ old('pantallas_id') == $pantalla->idPantallas ? 'selected' : '' }}>{{ $pantalla->Nombre_del_producto }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('pantallas_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="teclados_id">Teclado</label>
                                <select class="form-control" name="teclados_id">
                                    <option value="">Selecciona un teclado</option>
                                    @foreach($teclados as $teclado)
                                    <option value="{{ $teclado->idTeclado }}" {{ old('teclados_id') == $teclado->idTeclado ? 'selected' : '' }}>{{ $teclado->Nombre_del_producto }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('teclados_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="mouse_id">Mouse</label>
                                <select class="form-control" name="mouse_id">
                                    <option value="">Selecciona un mouse</option>
                                    @foreach($mouses as $mouse)
                                    <option value="{{ $mouse->idMouse }}" {{ old('mouse_id') == $mouse->idMouse ? 'selected' : '' }}>{{ $mouse->Nombre_del_producto }}</option>
                                    @endforeach
                                </select>
                                @error('mouse_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="rams_id">Ram</label>
                                <select class="form-control" name="rams_id">
                                    <option value="">Selecciona una memoria Ram</option>
                                    @foreach($rams as $ram)
                                    <option value="{{ $ram->idRam }}" {{ old('rams_id') == $ram->idRam ? 'selected' : '' }}>{{ $ram->Nombre_del_producto }}</option>
                                    @endforeach
                                </select>
                                @error('rams_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="graficas_id">Grafica</label>
                                <select class="form-control" name="graficas_id">
                                    <option value="">Selecciona una carrera</option>
                                    @foreach($graficas as $grafica)
                                    <option value="{{ $grafica->idTarjetaGrafica }}" {{ old('graficas_id') == $grafica->idTarjetaGrafica ? 'selected' : '' }}>{{ $grafica->Nombre_del_producto }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('graficas_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="madres_id">Tarjeta Madre</label>
                                <select class="form-control" name="madres_id">
                                    <option value="">Selecciona una Tarjeta Madre</option>
                                    @foreach($madres as $madre)
                                    <option value="{{ $madre->idTarjetas_Madre }}" {{ old('madres_id') == $madre->idTarjetas_Madre ? 'selected' : '' }}>{{ $madre->Nombre_del_producto }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('madres_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="refrigeracion_id">Refrigeracion</label>
                                <select class="form-control" name="refrigeracion_id">
                                    <option value="">Selecciona una refrigeracion</option>
                                    @foreach($refrigeraciones as $refrigeracion)
                                    <option value="{{ $refrigeracion->idSistema_refrigeracion }}" {{ old('refrigeracion_id') == $refrigeracion->idSistema_refrigeracion ? 'selected' : '' }}>{{
                                        $refrigeracion->Nombre_del_producto }}</option>
                                    @endforeach
                                </select>
                                @error('refrigeracion_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="alimentaciones_id">Alimentacion</label>
                                <select class="form-control" name="alimentaciones_id">
                                    <option value="">Selecciona una Alimentacion</option>
                                    @foreach($alimentaciones as $alimentacion)
                                    <option value="{{ $alimentacion->idAlimentacion }}" {{ old('alimentaciones_id') == $alimentacion->idAlimentacion ? 'selected' : '' }}>{{
                                        $alimentacion->Nombre_producto }}</option>
                                    @endforeach
                                </select>
                                @error('alimentaciones_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="cpu_id">Cpu</label>
                                <select class="form-control" name="cpu_id">
                                    <option value="">Selecciona una CPU</option>
                                    @foreach($cpus as $cpu)
                                    <option value="{{ $cpu->idCpu }}" {{ old('cpu_id') == $cpu->idCpu ? 'selected' : '' }}>{{ $cpu->Nombre_del_producto }}</option>
                                    @endforeach
                                </select>
                                @error('cpu_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Descripcion</label>
                                <input class="form-control" type="text" name="Descripcion" value="{{ old('Descripcion') }}">
                                @error('Descripcion')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="categorias_id">Gama(Categoria)</label>
                                <select class="form-control" name="categorias_id">
                                    <option value="">Selecciona una Gama(Categoria)</option>
                                    @foreach($categorium as $categorium)
                                    <option value="{{ $categorium->idCategoria }}" {{ old('categorias_id') == $categorium->idCategoria ? 'selected' : '' }}>{{ $categorium->Nombre }}</option>
                                    @endforeach
                                </select>
                                @error('categorias_id')
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

                            <div class="form-group">
                                <label>Precio</label>
                                <input class="form-control" type="text" name="Precio" value="{{ old('Precio') }}">
                                @error('Precio')
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