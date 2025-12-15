<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\Equipo;
use App\Models\Alimentacion;
use App\Models\Cpu;
use App\Models\Gabinete;
use App\Models\Grafica;
use App\Models\Madre;
use App\Models\Mouse;
use App\Models\Pantalla;
use App\Models\Procesador;
use App\Models\Ram;
use App\Models\Refrigeracion;
use App\Models\Teclado;
use App\Models\Cart;
use App\Models\Tienda;
use App\Models\Categoria;
use App\Models\EstatusEntidad;

class TiendaController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $equipos = Equipo::where('Nombre_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Tipo_de_tarjeta_grafica','LIKE','%'.$busqueda.'%')
        ->orWhere('gabinetes_id','LIKE','%'.$busqueda.'%')
        ->orWhere('alimentaciones_id','LIKE','%'.$busqueda.'%')
        ->orWhere('pantallas_id','LIKE','%'.$busqueda.'%')
        ->orWhere('mouse_id','LIKE','%'.$busqueda.'%')
        ->orWhere('graficas_id','LIKE','%'.$busqueda.'%')
        ->orWhere('cpu_id','LIKE','%'.$busqueda.'%')
        ->orWhere('procecadores_id','LIKE','%'.$busqueda.'%')
        ->orWhere('madres_id','LIKE','%'.$busqueda.'%')
        ->orWhere('rams_id','LIKE','%'.$busqueda.'%')
        ->orWhere('refrigeracion_id','LIKE','%'.$busqueda.'%')
        ->orWhere('teclados_id','LIKE','%'.$busqueda.'%')
        ->orWhere('estatusentidad_id','LIKE','%'.$busqueda.'%')
        ->orWhere('categorias_id','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')
        ->orWhere('Precio','LIKE','%'.$busqueda.'%')

        ->latest('idEquipos')
        ->paginate(10);

        return view('tienda.index',compact('equipos','busqueda'));
    }


    public function edit(Equipo $tienda)
    {
        return view('tienda.edit',compact('tienda'));

    }

    public function show(Equipo $tienda,Request $request)
    {
        return view('tienda.show',compact('tienda'));
    }


    public function stripe()
    {
        return view('tienda.checkout');
    }


}


