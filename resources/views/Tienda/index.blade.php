@extends('layouts.user')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css','resources/js/desaparecerFlash.js'])

</head>

@section('content')

<div id="mensaje-exito" class="container">
      @if(session()->has('success'))
      <div class="alert alert-success">
          {{session('success')}}
      </div>
    @endif
</div>

<body>
  <div class="container">

    <div class="col-xs-6 mx-auto">
      <form action="{{route('tienda.index')}}" method="GET">
        <div class="d-flex">
          <input type="text" name="busqueda" class="form-control">
          <input type="submit" value="buscar" class="btn btn-primary">
          <input type="submit" value="limpiar" class="btn btn-warning">

        </div>
      </form>
    </div>
    <br>

    <br>

    <div class="row justify-content-center">
      @foreach($equipos as $equipo)
      <div class="col-md-4 mb-4">

        <div class="card h-100">
          <a href="{{route('tienda.show', ['tienda'=>$equipo])}}">

            <img class="card-img-top" src="{{asset('storage/'.$equipo->Gabinete->Portada)}}" alt="Card image cap">
            <div class="card-body">

              <h5 class="card-title">{{$equipo->Nombre_producto}}</h5>
              <p class="card-text">{{$equipo->Procesador->Nombre_del_producto}}</p>
              <p class="card-text">{{$equipo->Ram->Nombre_del_producto}}</p>
              <p class="card-text">{{$equipo->Grafica->Nombre_del_producto}}</p>
              <p class="card-text">{{$equipo->Categoria->Nombre}}</p>
              <p class="card-text">{{($equipo->Precio)}}</p>
            </div>
          </a>

        </div>
      </div>
      @endforeach
    </div>

    <div class="container">
      {{ $equipos->links('pagination::bootstrap-5') }}
    </div>
  </div>

</body>

@include('layouts.footer')
@endsection

</html>