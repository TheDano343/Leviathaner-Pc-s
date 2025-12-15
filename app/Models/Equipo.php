<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $primaryKey = "idEquipos";

    protected $fillable = [
        'Nombre_producto',
        'Tipo_de_tarjeta_grafica',


        // Gabinetes
        'gabinetes_id',
        /////////// 

        // Alimentaciones
        'alimentaciones_id',
        /////////// 

        // Pantalla
        'pantallas_id',
        /////////// 
        
        // Mouse
        'mouse_id',
        ////////// 

        // Grafica
        'graficas_id',
        /////////// 

        // Cpu 
        'cpu_id',
        /////////// 
        
        // Procesador
        'procecadores_id',
        /////////// 

        // Madre 
        'madres_id',
        /////////// 
        
        // Ram
        'rams_id',
        /////////// 

        // Refrigeracion 
        'refrigeracion_id',
        /////////// 
        
        // Teclado
        'teclados_id',
        /////////// 

        // Estatus
        'estatusentidad_id',
        ///////////

        // Categoria
        'categorias_id',
        ///////////

        'Descripcion',
        'Precio'
    ];


    public function Alimentacion()
    {
        return $this->belongsTo(Alimentacion::class, 'alimentaciones_id','idAlimentacion');
    }

    public function Cpu()
    {
        return $this->belongsTo(Cpu::class, 'cpu_id','idCpu');
    }

    public function Gabinete()
    {
        return $this->belongsTo(Gabinete::class, 'gabinetes_id','idGabinetes');
    }

    public function Grafica()
    {
        return $this->belongsTo(Grafica::class, 'graficas_id','idTarjetaGrafica');
    }

    public function Madre()
    {
        return $this->belongsTo(Madre::class, 'madres_id','idTarjetas_Madre');
    }

    public function Mouse()
    {
        return $this->belongsTo(Mouse::class, 'mouse_id','idMouse');
    }

    public function Pantalla()
    {
        return $this->belongsTo(Pantalla::class, 'pantallas_id','idPantallas');
    }

    public function Procesador()
    {
        return $this->belongsTo(Procesador::class, 'procecadores_id','idProcesador');
    }

    public function Ram()
    {
        return $this->belongsTo(Ram::class, 'rams_id','idRam');
    }

    public function Refrigeracion()
    {
        return $this->belongsTo(Refrigeracion::class, 'refrigeracion_id','idSistema_refrigeracion');
    }

    public function Teclado()
    {
        return $this->belongsTo(Teclado::class, 'teclados_id','idTeclado');
    }

    public function Cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function Categoria()
    {
    return $this->belongsTo(Categoria::class, 'categorias_id', 'idCategoria');
    }

    public function Estatus()
    {
    return $this->belongsTo(EstatusEntidad::class, 'estatusentidad_id', 'idEstatusEntidad');
    }
}
