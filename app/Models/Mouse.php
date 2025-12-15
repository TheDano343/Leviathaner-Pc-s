<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouse extends Model
{
    use HasFactory;

    protected $primaryKey = 'idMouse';

    protected $fillable = 
    [
        'Nombre_del_producto',
        'Marca',
        'Tipo_de_conectividad',
        'Tecnologia_de_deteccion_de_movimiento',
        'Descripcion',
        // Estatus
        'estatusentidad_id',
        /////////// 
        'Portada'
    ];
    
    public function Equipo()
    {
        return $this->hasOne(Equipos::class, 'mouse_id','idMouse');
    }

     public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }
}
