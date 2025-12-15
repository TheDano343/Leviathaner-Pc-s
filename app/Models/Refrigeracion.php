<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refrigeracion extends Model
{
    use HasFactory;

    protected $primaryKey = "idSistema_refrigeracion";

    protected $fillable = [
        'Nombre_del_producto',
        'Dimensiones_del_producto',
        'Voltaje',
        'Metodo_de_enfriamiento',
        'Dispositivos_compatibles',
        'Nivel_de_ruido',
        'Material',
        'Velocidad_maxima_de_rotacion',
        'Descripcion',
        // Estatus
        'estatusentidad_id',
        /////////// 
        'Portada'

    ];
    
    public function Equipo()
    {
        return $this->hasOne(Equipos::class, 'refrigeracion_id','idSistema_refrigeracion');
    }

     public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }
}
