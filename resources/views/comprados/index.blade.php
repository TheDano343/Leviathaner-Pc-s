@extends('layouts.user')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])

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
                                <th scope="col">Producto Adquirido</th>
                            </tr>
                        </thead>

                        @foreach($ordenDetalles as $ordenDetalle)
                    <tbody>
                            <td>{{$ordenDetalle->Nombre_producto}}</td>
                    </tbody>
                    @endforeach
                    </table>
                </div>               
            </div>
        </div>
    </section>
    @endsection
</body>

</html>