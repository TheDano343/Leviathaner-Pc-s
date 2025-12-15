<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Orden;
use App\Models\OrdenDetalles;

use Illuminate\Http\Request;

class OrdenDetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carritos = Carrito::where('users_id', auth()->user()->id)->get();  
        $ordenDetalles = OrdenDetalles::where('users_id', auth()->user()->id)->get();  
        return view('detalles.index', compact('ordenDetalles','carritos'));
        
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
            'orden_id' =>'required',
            'quantity' ,
            'Nombre_producto'=>'required',
            'users_id',
            'Precio' =>'required'
        ]);

        $data= $request->all();
        $data['users_id']=auth()->id();

        OrdenDetalles::create($data);
        return redirect()->route('tienda.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrdenDetalles $ordenDetalles)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrdenDetalles $ordenDetalles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrdenDetalles $ordenDetalles)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrdenDetalles $ordenDetalles)
    {
        //
    }
}
