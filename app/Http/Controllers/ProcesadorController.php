<?php

namespace App\Http\Controllers;

use App\Models\Procesador;
use App\Models\EstatusEntidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProcesadorController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $procesadores = Procesador::where('Nombre_del_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Marca','LIKE','%'.$busqueda.'%')
        ->orWhere('Fabricante_del_CPU','LIKE','%'.$busqueda.'%')
        ->orWhere('Modelo_del_CPU','LIKE','%'.$busqueda.'%')
        ->orWhere('Velocidad_del_CPU','LIKE','%'.$busqueda.'%')
        ->orWhere('Enchufe_del_CPU','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')

        
        ->latest('idProcesador')
        ->paginate(10);
        return view('procesadores.index',compact('procesadores','busqueda'));
    }

    //  public function clean()
    //  {
    //      $procesadores = Procesador::paginate(10);
    //      return view('procesadores.index',compact('procesadores'));
    //  }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $procesadores = Procesador::all();
        $estatusEntidad = EstatusEntidad::all(); 
        return view('procesadores.create',compact('procesadores','estatusEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'Nombre_del_producto' => 'required|unique:procesadors',
            'Marca' => 'required',
            'Fabricante_del_CPU' => 'required',
            'Modelo_del_CPU' => 'required',
            'Velocidad_del_CPU' => 'required',
            'Enchufe_del_CPU' => 'required',
            'Descripcion' => 'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Procesador::create($params);
        return redirect()->route('procesador.index')->with('success','Registro Agregado');

    }

    /**
     * Display the specified resource.
     */
    public function show(Procesador $procesador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Procesador $procesador)
    {
        $estatusEntidades = EstatusEntidad::all(); 
        return view('procesadores.edit',compact('procesador','estatusEntidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Procesador $procesador)
    {
        $data = $request->validate([
            'Nombre_del_producto'=>'required|unique:procesadors',
            'Marca'=>'required',
            'Fabricante_del_CPU'=>'required',
            'Modelo_del_CPU'=>'required',
            'Velocidad_del_CPU'=>'required',
            'Enchufe_del_CPU'=>'required',
            'Descripcion'=>'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'nullable'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $procesador->update($data);
        return redirect()->route('procesador.index')->with('update','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procesador $procesador)
    {
        $procesador->delete();
        return redirect()->route('procesador.index')->with('destroy','Registro Elimado');
    }
}
