<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;

    protected $primaryKey = 'idRam';

    protected $fillable = 
    [
        'Nombre_del_producto',
        'Marca',
        'Tamaño_de_memoria_de_la_computadora',
        'Tegnologia_de_la_memoria_ram',
        'Tamaño_de_la_memoria',
        'Velocidad_de_memoria',
        'Dispositivos_compatibles',
        'Descripcion',
        // Estatus
        'estatusentidad_id',
        /////////// 
        'Portada'
    ];

    public function Equipo()
    {
        return $this->hasOne(Equipo::class, 'rams_id','idRam');
    }

     public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }
}
