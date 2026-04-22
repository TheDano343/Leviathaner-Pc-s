@extends('layouts.user')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        @section('content')

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <table class="table table-image">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Total</th>

                            </tr>
                        </thead>

                        @php $sum = 0; @endphp
                        @foreach($carritos as $carrito)
                        @php $sum = $sum + $carrito->Precio * $carrito->quantity; @endphp
                        <tbody>
                            <td>{{$carrito->Nombre_producto}}</td>
                            <td>{{number_format($carrito->Precio)}}$</td>
                            <td>{{$carrito->quantity}}</td>
                            <td>{{number_format($carrito->quantity * $carrito->Precio)}}</td>


                            <td>
                            <th>
                                <form action="{{ route('carrito.destroy',['carrito'=>$carrito])}}" method="post">
                                    @csrf
                                    @method('delete')

                                    <input class="btn btn-danger" type="submit" value="Eliminar" />
                                </form>
                            </th>

                            </td>
                        </tbody>
                        @endforeach
                    </table>

                </div>

                <!-- Pago de carrito -->




                <div class="container">
                    <div class="row">
                        <th scope="col">${{$sum}}</th>
                    </div>
                    <br>

                    <div class="row">

                        <a class="btn btn-success" href="{{ route('orden.index') }}" type="submit">Proceder a
                            comprar</a>



                    </div>
                </div>

                <!----------------------->
            </div>
        </div>
    </section>
    @endsection
</body>

</html>