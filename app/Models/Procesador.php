<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procesador extends Model
{
    use HasFactory;

    protected $primaryKey = 'idProcesador';

    protected $fillable = 
    [
        'Nombre_del_producto',
        'Marca',
        'Fabricante_del_CPU',
        'Modelo_del_CPU',
        'Velocidad_del_CPU',
        'Enchufe_del_CPU',
        'Descripcion',
        // Estatus
        'estatusentidad_id',
        /////////// 
        'Portada'
    ];
    
    public function Equipo()
    {
        return $this->hasOne(Equipos::class, 'procecadores_id','idProcesador');
    }

     public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }
}
