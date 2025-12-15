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
        Crear gabinete 
        <a class="btn btn-danger float-end" href="{{url('gabinete')}}">Regresar</a>
    </h4>
</div>

<div class="card-body">
    <form action="{{route('gabinete.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="mb-3">
            <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto">
        </div>

        <div class="mb-3">
            <label>Marca</label>
            <input type="text" class="form-control" name="Marca">
        </div>

        <div class="mb-3">
            <label>Tipo de estuche</label>
            <input type="text" class="form-control" name="Tipo_de_estuche">
        </div>

        <div class="mb-3">
            <label>Uso recomendado</label>
            <input type="text" class="form-control" name="Usos_recomendados_para_el_producto">
        </div>

        <div class="mb-3">
        <label>Color</label>
            <input type="text" class="form-control" name="Color">
        </div>

        <div class="mb-3">
        <label>Material</label>
            <input type="text" class="form-control" name="Material">
        </div>

        <div class="mb-3">
        <label>Metodo de enfriamiento</label>
            <input type="text" class="form-control" name="Metodo_de_enfriamiento">
        </div>

        <div class="mb-3">
            <label>Nombre del modelo</label>
            <input type="text" class="form-control" name="Nombre_del_modelo">
        </div>

        <div class="mb-3">
            <label>Luces de colores</label>
            <input type="text" class="form-control" name="Luces_de_colores">
        </div>

        <div class="mb-3">
            <label>Tamaño de ventilador</label>
            <input type="number" class="form-control" name="Tamaño_de_ventilador">
        </div>

        <div class="mb-3">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion">
        </div>
        

        <div class="mb-3">
            <label>Precio</label>
            <input type="number" class="form-control" name="Precio">
        </div>

        <div class="mb-3">
            <label>Portada</label>
            <input type="file" class="form-control" name="Portada">
        </div>

        

        <button class="btn btn-primary" type="submit">Crear</button>
        
    </form>
    </div>
    </div>
    </div>
    </div>
@endsection
</body>

</html>