<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $fillable = [
        'user_id',
        'uuid',
        'Nombre',
        'Apellido',
        'Direccion',
        'Cp'
    ];

    public function ordenDetalles()
    {
        return $this->hasMany(OrdenDetalles::class, 'id');
    }

    

    protected static function booted(): void
    {
        static::creating(function (Orden $orden) {
            $orden->uuid = str()->uuid();
        });
    }
}
