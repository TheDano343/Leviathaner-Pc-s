<?php

namespace App\Http\Controllers;

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
use App\Models\Categoria;
use App\Models\EstatusEntidad;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')
        ->orWhere('Precio','LIKE','%'.$busqueda.'%')


        ->paginate(10);
        return view('equipo.index',compact('equipos','busqueda'));
    }
    
    // public function index()
    // {
    //     $equipos = Equipo::paginate(9);
    //     $cpus = Cpu::paginate(9);
    //     $gabinetes = Gabinete::paginate(9);
    //     $graficas = Grafica::paginate(9);
    //     $madres = Madre::paginate(9);
    //     $mouses = Mouse::paginate(9);
    //     $pantallas = Pantalla::paginate(9);
    //     $procesadores = Procesador::paginate(9);
    //     $rams = Ram::paginate(9);
    //     $refrigeraciones = Refrigeracion::paginate(9);
    //     $teclados = Teclado::paginate(9);
    //     $alimentaciones = Alimentacion::paginate(9);
    //     $categorium = Categoria::paginate(9);
    //     return view('equipo.index',compact('equipos','cpus','gabinetes','graficas','madres','mouses','pantallas','procesadores','rams','refrigeraciones','teclados','alimentaciones','categorium'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = Equipo::all();
        $cpus = Cpu::all();
        $gabinetes = Gabinete::all();
        $graficas = Grafica::all();
        $madres = Madre::all();
        $mouses = Mouse::all();
        $pantallas = Pantalla::all();
        $procesadores = Procesador::all();
        $rams = Ram::all();
        $refrigeraciones = Refrigeracion::all();
        $teclados = Teclado::all();
        $alimentaciones = Alimentacion::all();
        $categorium = Categoria::all();
        $estatusEntidad = EstatusEntidad::all(); 
        return view('equipo.create',compact('equipos','cpus','gabinetes','graficas','madres','mouses','pantallas','procesadores','rams','refrigeraciones','teclados','alimentaciones','categorium','estatusEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'Nombre_producto' => 'required|unique:equipos',
        'Tipo_de_tarjeta_grafica' => 'required',
        'procecadores_id' => 'required',
        'gabinetes_id' => 'required',
        'pantallas_id' => 'required',
        'teclados_id' => 'required',
        'mouse_id' => 'required',
        'rams_id' => 'required',
        'graficas_id' => 'required',
        'madres_id' => 'required',
        'refrigeracion_id' => 'required',
        'alimentaciones_id' => 'required',
        'cpu_id' => 'required',
        'estatusentidad_id' => 'required',
        'categorias_id'=> 'required',
        'Descripcion' => 'required',
        'Precio' => 'required'
        ]);
      
        Equipo::create($request->all());
        return redirect()->route('equipo.index')->with('success','Registro Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        return view('equipo.show',compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        $equipos = Equipo::all();
        $cpus = Cpu::all();
        $gabinetes = Gabinete::all();
        $graficas = Grafica::all();
        $madres = Madre::all();
        $mouses = Mouse::all();
        $pantallas = Pantalla::all();
        $procesadores = Procesador::all();
        $rams = Ram::all();
        $refrigeraciones = Refrigeracion::all();
        $teclados = Teclado::all();
        $alimentaciones = Alimentacion::all();
        $estatusEntidades = EstatusEntidad::all(); 
        $categorium = Categoria::all();
        return view('equipo.edit',compact('equipo','cpus','gabinetes','graficas','madres','mouses','pantallas','procesadores','rams','refrigeraciones','teclados','alimentaciones','categorium','estatusEntidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
      $data = $request->validate([
        'Nombre_producto' => 'required|unique:equipos',
        'Tipo_de_tarjeta_grafica' => 'required',
        'procecadores_id' => 'required',
        'gabinetes_id' => 'required',
        'pantallas_id' => 'required',
        'teclados_id' => 'required',
        'mouse_id' => 'required',
        'rams_id' => 'required',
        'graficas_id' => 'required',
        'madres_id' => 'required',
        'refrigeracion_id' => 'required',
        'alimentaciones_id' => 'required',
        'cpu_id' => 'required',
        'estatusentidad_id' => 'required',
        'categorias_id'=> 'required',
        'Descripcion' => 'required',
        'Precio' => 'required'
            ]);
          
            $equipo->update($data);
            return redirect()->route('equipo.index')->with('update','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipo.index')->with('destroy','Registro Elimado');
    }
}
