<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimentacion extends Model
{
    use HasFactory;

    protected $primaryKey = 'idAlimentacion';

    protected $fillable = 
    [
        'Nombre_producto',
        'Nombre_modelo',
        'Marca',
        'Dispositivos_compatibles',
        'Tipo_conector',
        'Potencia_de_salida',
        'Factor_de_forma',
        'Voltaje',
        'Metodo_de_enfriamiento',
        'Dimensiones_de_articulo',
        'Largo_y_ancho',
        'Peso_del_producto',
        'Descripcion',

        // Estatus
        'estatusentidad_id',
        /////////// 

        'Portada'
    ];

    public function Equipo()
    {
        return $this->hasOne(Equipos::class, 'alimentaciones_id','idAlimentacion');
    }

     public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }

}
