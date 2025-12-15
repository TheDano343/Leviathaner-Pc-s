<?php

namespace App\Http\Controllers;

use App\Models\Mouse;
use App\Models\EstatusEntidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MouseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $mouses = Mouse::where('Nombre_del_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Marca','LIKE','%'.$busqueda.'%')
        ->orWhere('Tipo_de_conectividad','LIKE','%'.$busqueda.'%')
        ->orWhere('Tecnologia_de_deteccion_de_movimiento','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')

        
        ->latest('idMouse')
        ->paginate(10);
        return view('mouse.index',compact('mouses','busqueda'));
    }
    
    
     // public function index()
    // {
    //     $mouses = Mouse::paginate(10);
    //     return view('mouse.index', compact('mouses'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mouses = Mouse::all();
        $estatusEntidad = EstatusEntidad::all(); 
        return view('mouse.create', compact('mouses','estatusEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $params = $request->validate([
            'Nombre_del_producto'=>'required',
            'Marca'=>'required',
            'Tipo_de_conectividad'=>'required',
            'Tecnologia_de_deteccion_de_movimiento'=>'required',
            'Descripcion'=>'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }
        
        Mouse::create($params);
        return redirect(route('mouse.index'))->with('success','Registro Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mouse $mouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mouse $mouse)
    {
        $estatusEntidades = EstatusEntidad::all(); 
        return view('mouse.edit', compact('mouse','estatusEntidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mouse $mouse)
    {
       $data = $request->validate([
            'Nombre_del_producto'=>'required',
            'Marca'=>'required',
            'Tipo_de_conectividad'=>'required',
            'Tecnologia_de_deteccion_de_movimiento'=>'required',
            'Descripcion'=>'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'nullable'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $mouse->update($data);
        return redirect(route('mouse.index'))->with('update','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mouse $mouse)
    {
        $mouse->delete();
        return redirect(route('mouse.index'))->with('destroy','Registro Elimado');
    }
}
