<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madre extends Model
{
    use HasFactory;

    protected $primaryKey = 'idTarjetas_Madre';

    protected $fillable = [
        'Nombre_del_producto',
        'Marca',
        'Enchufe_de_CPU',
        'Dispositivos_Compatibles',
        'Tecnologia_de_la_memoria_RAM',
        'Procesadores_Compatibles',
        'Tipo_de_circuitos_integrados',
        'Velocidad_del_reloj_de_la_memoria',
        'Nombre_del_modelo',
        'Capacidad_de_almacenamiento_de_la_memoria',
        'Descripcion',
        // Estatus
        'estatusentidad_id',
        /////////// 
        'Portada'
    ];

    public function Equipo()
    {
        return $this->hasOne(Equipos::class,'madres_id','idTarjetas_Madre');
    }

     public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }
}
