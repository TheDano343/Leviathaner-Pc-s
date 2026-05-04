<?php

namespace App\Http\Controllers;

use App\Models\Pantalla;
use App\Models\EstatusEntidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PantallaController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $pantallas = Pantalla::where('Nombre_del_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Resolucion','LIKE','%'.$busqueda.'%')
        ->orWhere('Tamaño_de_la_pantalla','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion_de_la_superficie_de_la_pantalla','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')

        
        ->paginate(10);
        return view('pantalla.index',compact('pantallas','busqueda'));
    }

    // public function clean()
    // {
    //     $pantallas = Pantalla::paginate(10);
    //     return view('pantalla.index',compact('pantallas'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pantallas = Pantalla::all();
        $estatusEntidad = EstatusEntidad::all(); 
        return view('pantalla.create',compact('pantallas','estatusEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $params = $request->validate([
            'Nombre_del_producto'=>'required|unique:pantallas',
            'Resolucion'=>'required',
            'Tamaño_de_la_pantalla'=>'required',
            'Descripcion_de_la_superficie_de_la_pantalla'=>'required',
            'Descripcion'=>'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Pantalla::create($params);
        return redirect()->route('pantalla.index')->with('success','Registro Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pantalla $pantalla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pantalla $pantalla)
    {
        $estatusEntidades = EstatusEntidad::all(); 
        return view('pantalla.edit',compact('pantalla','estatusEntidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pantalla $pantalla)
    {
        $data = $request->validate([
            'Nombre_del_producto'=>'required|unique:pantallas',
            'Resolucion'=>'required',
            'Tamaño_de_la_pantalla'=>'required',
            'Descripcion_de_la_superficie_de_la_pantalla'=>'required',
            'Descripcion'=>'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'nullable'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $pantalla->update($data);
        return redirect()->route('pantalla.index')->with('update','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pantalla $pantalla)
    {
        $pantalla->delete();
        return redirect()->route('pantalla.index')->with('destroy','Registro Elimado');
    }
}
