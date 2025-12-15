<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDetalles extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
 
    protected $fillable = [
        'Nombre_producto',
        'orden_id',
        'quantity',
        'users_id',
        'Precio'
    ];

    public function orden()
    {
        return $this->belongsTo(Orden::class, 'id');
    }

    public function Estatus()
    {
        return $this->hasOne(EstatusEntidad::class, 'estatusentidad_id','idEstatusEntidad');
    }
}
