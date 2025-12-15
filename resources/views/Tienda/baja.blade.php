@extends('layouts.user')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css'])

</head>

@section('content')

<body>
  <div class="container">

    <div class="row justify-content-center">
      @foreach($equipos as $equipo)
      <div class="col-md-4 mb-4">

        <div class="card h-100" style="width: 18rem;">
          <a href="{{route('tienda.show', ['tienda'=>$equipo])}}">

            <img class="card-img-top" src="{{asset('storage/'.$equipo->Gabinete->Portada)}}" alt="Card image cap">
            <div class="card-body">

              <h5 class="card-title">{{$equipo->Nombre_producto}}</h5>
              <p class="card-text">{{$equipo->Procesador->Nombre_del_producto}}</p>
              <p class="card-text">{{$equipo->Ram->Nombre_del_producto}}</p>
              <p class="card-text">{{$equipo->Grafica->Nombre_del_producto}}</p>
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