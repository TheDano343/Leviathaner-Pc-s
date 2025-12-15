<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusEntidad extends Model
{
    use HasFactory;

    protected $primaryKey = 'idEstatusEntidad';

    protected $fillable = 
    [
        'Nombre_Estatus'
    ];


    public function Gabinete()
    {   
        return $this->hasMany(Gabinete::class, 'estatusentidad_id','idEstatusEntidad');
    }

    

}
