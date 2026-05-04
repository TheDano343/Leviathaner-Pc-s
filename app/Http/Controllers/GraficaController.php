<?php

namespace App\Http\Controllers;

use App\Models\Grafica;
use App\Models\EstatusEntidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GraficaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $graficas = Grafica::where('Nombre_del_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Coprocesador','LIKE','%'.$busqueda.'%')
        ->orWhere('Marca','LIKE','%'.$busqueda.'%')
        ->orWhere('Ram_para_graficos','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')


        ->latest('idTarjetaGrafica')
        ->paginate(10);
        return view('grafica.index',compact('graficas','busqueda'));
    }
    
    // public function index()
    // {
    //     $graficas = Grafica::paginate(10);
    //     return view('grafica.index', compact('graficas'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $graficas = Grafica::all();
        $estatusEntidad = EstatusEntidad::all(); 
        return view('grafica.create', compact('graficas','estatusEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $params = $request->validate([
            'Nombre_del_producto' => 'required|unique:graficas',
            'Coprocesador' => 'required',
            'Marca' => 'required',
            'Ram_para_graficos' => 'required',
            'Descripcion' => 'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Grafica::create($params);
        return redirect()->route('grafica.index')->with('success','Registro Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Grafica $grafica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grafica $grafica)
    {
        $estatusEntidades = EstatusEntidad::all(); 
        return view('grafica.edit', compact('grafica','estatusEntidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grafica $grafica)
    {
        $data = $request->validate([
            'Nombre_del_producto' => 'required|unique:graficas',
            'Coprocesador' => 'required',
            'Marca' => 'required',
            'Ram_para_graficos' => 'required',
            'Descripcion' => 'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'nullable'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $grafica->update($data);
        return redirect()->route('grafica.index')->with('update','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grafica $grafica)
    {
        $grafica->delete();
        return redirect()->route('grafica.index')->with('destroy','Registro Elimado');

    }
}
