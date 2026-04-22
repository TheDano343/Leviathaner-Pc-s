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
    <form method="POST" action="{{ route('orden.store') }}">
      @csrf

      <h4 class="text-center font-weight-bold">Orden de pago</h4>
      <div class="form-row">

        <div class="form-group col-md-6">
          <div class="mb-3">
            <label for="inputEmail4">Nombre</label>
            <input type="text" name="Nombre" class="form-control" placeholder="Ingresa Nombre">
          </div>
        </div>


        <div class="form-group col-md-6">
          <div class="mb-3">
            <label for="inputEmail4">Apellido</label>
            <input type="text" name="Apellido" class="form-control" placeholder="Ingresa Apellido">
          </div>
        </div>


        <div class="form-group">
          <div class="mb-3">

            <label for="inputAddress">Direccion</label>
            <input type="text" name="Direccion" class="form-control" placeholder="Ingresa Direccion">
          </div>
        </div>

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="form-group col-md-2">
          <div class="mb-3">
            <label for="inputZip">Codigo Postal</label>
            <input type="number" name="Cp" class="form-control" placeholder="Ingresa Codigo Postal">
          </div>
        </div>
      </div>

      <br>



      <!-- Carrito a pagar -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="text-center">Tu Carrito</h4>
                <ul class="list-group mb-3">
                  @php $sum = 0; @endphp
                  @foreach($carritos as $carrito)
                  @php $sum = $sum + $carrito->Precio * $carrito->quantity; @endphp
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">{{$carrito->Nombre_producto}}</h6>
                      <small class="text-muted">{{$carrito->quantity}}</small>
                    </div>
                    <span class="text-muted">{{number_format($carrito->quantity * $carrito->Precio)}}$</span>
                  </li>
                  @endforeach
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Total(Mex)</span>
                    <strong>{{$sum}}$</strong>
                  </li>
                </ul>



                <hr class="mb-4">
                <div class="card">
                  <button class="btn btn-primary" type="submit"
                    class="btn btn-primary btn-bg btn-block">Continuar</button>
                </div>
              </div>

    </form>
  </div>
  </div>
  </div>
  </div>
  </div>

  </div>
  </form>


  @endsection

</body>

</html>