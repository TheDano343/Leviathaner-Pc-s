<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gabinete extends Model
{
    use HasFactory;

    protected $primaryKey = 'idGabinetes';

    protected $fillable = 
    [
        'Nombre_del_producto',
        'Marca',
        'Tipo_de_estuche',
        'Usos_recomendados_para_el_producto',
        'Color',
        'Material',
        'Metodo_de_enfriamiento',
        'Nombre_del_modelo',
        'Luces_de_colores',
        'Tamaño_de_ventilador',
        'Descripcion',
        // Estatus
        'estatusentidad_id',
        /////////// 
        'Portada'
    ];

    public function Equipo()
    {
        return $this->hasOne(Equipos::class, 'gabinetes_id','idGabinetes');
    }

    public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }
}
