<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grafica extends Model
{
    use HasFactory;

    protected $primaryKey = "idTarjetaGrafica";

    protected $fillable = [
        'Nombre_del_producto',
        'Coprocesador',
        'Marca',
        'Ram_para_graficos',
        'Descripcion',
        // Estatus
        'estatusentidad_id',
        /////////// 
        'Portada'
    ];

    public function Equipo()
    {
        return $this->hasOne(Equipo::class,'graficas_id','idTarjetaGrafica');
    }

    public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }
}
