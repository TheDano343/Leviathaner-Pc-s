<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pantalla extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPantallas';

    protected $fillable = 
    [
        'Nombre_del_producto',
        'Resolucion',
        'Tamaño_de_la_pantalla',
        'Descripcion_de_la_superficie_de_la_pantalla',
        'Descripcion',
        // Estatus
        'estatusentidad_id',
        /////////// 
        'Portada'
    ];
    
    public function Equipo()
    {
        return $this->hasOne(Equipos::class, 'pantallas_id','idPantallas');
    }

     public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }
    
}
