@extends('layouts.user')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/tienda.css'])

</head>

<body>

    @section('content')


    <div class="container">

        <!-- Imagen -->
        <div class="row">
            <div class="col-sm-6">
                <img class="card-img-top" src="{{asset('storage/'.$tienda->Gabinete->Portada)}}" alt="Card image cap">
            </div>
            <!------------>


            <div class="col-sm-6">
                <h1>{{$tienda->Nombre_producto}}</h1>
                <h3>Precio : ${{$tienda->Precio}}</h3>
                <h4>Descripcion : {{$tienda->Descripcion}}</h4>
                <h4>Grafica : {{$tienda->Grafica->Nombre_del_producto}}</h4>
                <h4>Procesador : {{$tienda->Procesador->Nombre_del_producto}}</h4>
                <h4>Cpu : {{$tienda->Cpu->Nombre_del_producto}}</h4>
                <h4>Ram : {{$tienda->Ram->Nombre_del_producto}} , {{$tienda->Ram->Tamaño_de_la_memoria}} Gb</h4>
                <h5>Cantidad

                    <!-- Formulario -->
                    <form action="{{route('carrito.store')}}" method="POST">
                        @csrf
                        <input type="number" name="quantity" class="form-control" min="1" max="{{$tienda->quantity}}"
                            value="1">
                        </p>
                        <input type="hidden" name="Nombre_producto" value="{{$tienda->Nombre_producto}}">
                        <input type="hidden" name="Precio" value="{{$tienda->Precio}}">
                        <input type="hidden" name="equipos_id" value="{{$tienda->idEquipos}}">

                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                    <!------------>

            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Imagenes informativas -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <br>
                    <h5 class="card-title">Cpu</h5>
                    <br>
                    <p class="card-text">{{$tienda->Cpu->Nombre_del_producto}}</p>
                    <br>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <br>
                    <h5 class="card-title">Gabiente</h5>
                    <br>
                    <p class="card-text">{{$tienda->Gabinete->Nombre_del_producto}}</p>
                    <br>
                </div>
            </div>
            <br>
            <div class="col-md-4">
                <div class="card text-center">
                    <br>
                    <h5 class="card-title">Refrigeracion</h5>
                    <br>
                    <p class="card-text">{{$tienda->Refrigeracion->Nombre_del_producto}}</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
    
    
    <!------------>


    @include('layouts.footer')
    @endsection


</body>

</html>