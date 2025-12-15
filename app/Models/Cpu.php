<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cpu extends Model
{
    use HasFactory;

    protected $primaryKey = "idCpu";

    protected $fillable = [
        'Nombre_del_producto',
        'Nombre_del_productoNormalizado',
        'Fabricante_del_cpu',
        'Modelo_del_cpu',
        'Velocidad_del_cpu',
        'Descripcion',
        'Portada',
        
        // Estatus
        'estatusentidad_id',
        /////////// 
    ];

    public function Equipo()
    {
        return $this->hasOne(Equipos::class,'cpu_id','idCpu');
    }

     public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }

}
