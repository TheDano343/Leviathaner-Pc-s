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

                        <h4>Editar teclado
                            <a class="btn btn-danger float-end" href="{{url('equipo')}}">Regresar</a>
                        </h4>
                        <form action="{{route('equipo.update',['equipo'=>$equipo])}}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label>Nombre producto</label>
                                <input class="form-control" type="text" name="Nombre_producto"
                                    value="{{$equipo->Nombre_producto}}">
                                @error('Nombre_producto')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tipo de tarjeta grafica</label>
                                <input class="form-control" type="text" name="Tipo_de_tarjeta_grafica"
                                    value="{{$equipo->Tipo_de_tarjeta_grafica}}">
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
                                    @if($procesador->idProcesador == $equipo->procecadores_id)
                                    <option selected value="{{ $procesador->idProcesador  }}">{{
                                        $procesador->Nombre_del_producto }}</option>
                                    @else
                                    <option value="{{ $procesador->idProcesador  }}">{{ $procesador->Nombre_del_producto
                                        }}</option>
                                    @endif
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
                                    @if($gabinete->idGabinetes == $equipo->gabinetes_id)
                                    <option selected value="{{ $gabinete->idGabinetes }}">{{
                                        $gabinete->Nombre_del_producto }}</option>
                                    @else
                                    <option value="{{ $gabinete->idGabinetes }}">{{ $gabinete->Nombre_del_producto }}
                                    </option>
                                    @endif
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
                                    @if($pantalla->idPantallas == $equipo->pantallas_id)
                                    <option selected value="{{ $pantalla->idPantallas  }}">{{
                                        $pantalla->Nombre_del_producto }}</option>
                                    @else
                                    <option value="{{ $pantalla->idPantallas  }}">{{ $pantalla->Nombre_del_producto }}
                                    </option>
                                    @endif
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
                                    @if($teclado->idTeclado == $equipo->teclados_id)
                                    <option selected value="{{ $teclado->idTeclado }}">{{ $teclado->Nombre_del_producto
                                        }}</option>
                                    @else
                                    <option value="{{ $teclado->idTeclado }}">{{ $teclado->Nombre_del_producto }}
                                    </option>
                                    @endif
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
                                    @if($mouse->idMouse == $equipo->mouse_id)
                                    <option selected value="{{ $mouse->idMouse }}">{{ $mouse->Nombre_del_producto }}
                                    </option>
                                    @else
                                    <option value="{{ $mouse->idMouse }}">{{ $mouse->Nombre_del_producto }}</option>
                                    @endif
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
                                    @if($ram->idRam == $equipo->rams_id)
                                    <option selected value="{{ $ram->idRam }}">{{ $ram->Nombre_del_producto }}</option>
                                    @else
                                    <option value="{{ $ram->idRam }}">{{ $ram->Nombre_del_producto }}</option>
                                    @endif
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
                                    @if($grafica->idTarjetaGrafica == $equipo->graficas_id)
                                    <option selected value="{{ $grafica->idTarjetaGrafica }}">{{
                                        $grafica->Nombre_del_producto }}</option>
                                    @else
                                    <option value="{{ $grafica->idTarjetaGrafica }}">{{ $grafica->Nombre_del_producto }}
                                    </option>
                                    @endif
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
                                    @if($madre->idTarjetas_Madre == $equipo->madres_id)
                                    <option selected value="{{ $madre->idTarjetas_Madre }}">{{
                                        $madre->Nombre_del_producto }}</option>
                                    @else
                                    <option value="{{ $madre->idTarjetas_Madre }}">{{ $madre->Nombre_del_producto }}
                                    </option>
                                    @endif
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
                                    @if($refrigeracion->idSistema_refrigeracion == $equipo->refrigeracion_id)
                                    <option selected value="{{ $refrigeracion->idSistema_refrigeracion }}">{{
                                        $refrigeracion->Nombre_del_producto }}</option>
                                    @else
                                    <option value="{{ $refrigeracion->idSistema_refrigeracion }}">{{
                                        $refrigeracion->Nombre_del_producto }}</option>
                                    @endif
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
                                    @if($alimentacion->idAlimentacion == $equipo->alimentaciones_id)
                                    <option selected value="{{ $alimentacion->idAlimentacion }}">{{
                                        $alimentacion->Nombre_producto }}</option>
                                    @else
                                    <option value="{{ $alimentacion->idAlimentacion }}">{{
                                        $alimentacion->Nombre_producto }}</option>
                                    @endif
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
                                    @if($cpu->idCpu == $equipo->cpu_id)
                                    <option selected value="{{ $cpu->idCpu }}">{{ $cpu->Nombre_del_producto }}</option>
                                    @else
                                    <option value="{{ $cpu->idCpu }}">{{ $cpu->Nombre_del_producto }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('cpu_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="estatusentidad_id">Visibilidad</label>
                                <select class="form-control" name="estatusentidad_id">
                                    <option value="">Selecciona un Visibilidad</option>
                                    @foreach($estatusEntidades as $estatus)
                                    @if($estatus->idEstatusEntidad == $equipo->estatusentidad_id)
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

                            <div class="form-group">
                                <label for="categorias_id">Gama(Categoria)</label>
                                <select class="form-control" name="categorias_id">
                                    <option value="">Selecciona una Gama(Categoria)</option>
                                    @foreach($categorium as $categorium)
                                    @if($categorium->idCategoria == $equipo->categorias_id)
                                    <option selected value="{{ $categorium->idCategoria }}">{{ $categorium->Nombre }}
                                    </option>
                                    @else
                                    <option value="{{ $categorium->idCategoria }}">{{ $categorium->Nombre }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('categorias_id')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Descripcion</label>
                                <input class="form-control" type="text" name="Descripcion"
                                    value="{{$equipo->Descripcion}}">
                                @error('Descripcion')
                                <span>{{ $message }}</span>
                                <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Precio</label>
                                <input class="form-control" type="text" name="Precio" value="{{$equipo->Precio}}">
                                @error('Precio')
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