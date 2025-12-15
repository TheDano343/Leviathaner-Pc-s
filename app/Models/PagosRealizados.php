<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagosRealizados extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $fillable = [
    'Nombre_del_propietario',
    'CVV',
    'Numero_de_tarjeta',
    'Dia_de_expiracion',
    'Año_de_expiracion',
    'Precio'
    ];
}
