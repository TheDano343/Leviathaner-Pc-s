<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
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
use App\Models\User;



use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carritos = Carrito::where('users_id', auth()->user()->id)->get();  
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
        return view('carrito.index',compact('equipos','carritos','cpus','gabinetes','graficas','madres','mouses','pantallas','procesadores','rams','refrigeraciones','teclados','alimentaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'quantity', 
        'equipos_id',
        'Nombre_producto',
        'users_id',
        'Precio'
    ]);

        $data= $request->all();
        $data['users_id']=auth()->id();

        Carrito::create($data); 
        return redirect()->route('tienda.index')->with('success','Producto Agregado al carrito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrito $carrito)
    {
        return view('carrito.show', compact('cart'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrito $carrito)
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
        return view('carrito.edit',compact('equipos','cpus','gabinetes','graficas','madres','mouses','pantallas','procesadores','rams','refrigeraciones','teclados','alimentaciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrito $carrito)
    {
        $carrito->delete();

        return redirect()->route('carrito.index');
    }
}