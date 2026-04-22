@extends('layouts.user')

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
        <div>
          <div class="card-header">
            <h4>Su compra ha sido exitosa</h4>
            <h5>Para concluir el proceso presione <b>"Regresar a la Tienda".<span></h5>
            <ul class="list-group mb-3">
              @php $sum = 0; @endphp
              @foreach($carritos as $carrito)
              @php $sum = $sum + $carrito->Precio * $carrito->quantity; @endphp
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">{{$carrito->Nombre_producto}}</h6>
                </div>
              </li>
              @endforeach
              <li class="list-group-item d-flex justify-content-between">
                <span>Total(Mex)</span>
                <strong>{{$sum}}$</strong>
              </li>
            </ul>
          </div>
        </div>
      </div>


      <div class="container">

        <form method="POST" action="{{ route('detalles.store') }}">
          @csrf

          <input type="hidden" name="orden_id" value="{{$carrito->equipos_id}}">
          <input type="hidden" name="quantity" value="{{$carrito->quantity}}">
          <input type="hidden" name="Nombre_producto" value="{{$carrito->Nombre_producto}}">

          <input type="hidden" name="Precio" value="{{$sum}}">

          <hr class="mb-4">

          <div class="card">

          </div>

          <div class="card">
            <button class="btn btn-primary btn-bg btn-block" type="submit">Regresar a la Tienda</button>
          </div>

        </form>

        <br>



      </div>

</body>
@endsection

</html>