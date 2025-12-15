<?php

namespace App\Http\Controllers;

use App\Models\Ram;
use App\Models\EstatusEntidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $rams = Ram::where('Nombre_del_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Marca','LIKE','%'.$busqueda.'%')
        ->orWhere('Tegnologia_de_la_memoria_ram','LIKE','%'.$busqueda.'%')
        ->orWhere('Tamaño_de_la_memoria','LIKE','%'.$busqueda.'%')
        ->orWhere('Velocidad_de_memoria','LIKE','%'.$busqueda.'%')
        ->orWhere('Dispositivos_compatibles','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')

        
        ->latest('idRam')
        ->paginate(10);
        return view('ram.index',compact('rams','busqueda'));
    }
    // public function index()
    // {
    //     $rams = Ram::paginate(10);
    //     return view('ram.index',compact('rams'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rams = Ram::all();
        $estatusEntidad = EstatusEntidad::all(); 
        return view('ram.create',compact('rams','estatusEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $params = $request->validate([
            'Nombre_del_producto'=>'required',
            'Marca'=>'required',
            'Tegnologia_de_la_memoria_ram'=>'required',
            'Tamaño_de_la_memoria'=>'required',
            'Velocidad_de_memoria'=>'required',
            'Dispositivos_compatibles'=>'required',
            'Descripcion'=>'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'required'
        ]);
       
       
        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }
       
        Ram::create($params);
        return redirect()->route('ram.index')->with('success','Registro Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ram $ram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ram $ram)
    {
        $estatusEntidades = EstatusEntidad::all(); 
        return view('ram.edit',compact('ram','estatusEntidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ram $ram)
    {
        $data = $request->validate([
            'Nombre_del_producto'=>'required',
            'Marca'=>'required',
            'Tegnologia_de_la_memoria_ram'=>'required',
            'Tamaño_de_la_memoria'=>'required',
            'Velocidad_de_memoria'=>'required',
            'Dispositivos_compatibles'=>'required',
            'Descripcion' => 'required',
            'estatusentidad_id' => 'required',
            'Portada'  => 'nullable'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $ram->update($data);
        return redirect()->route('ram.index')->with('update','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ram $ram)
    {
        $ram->delete();
        return redirect()->route('ram.index')->with('destroy','Registro Elimado');
    }
}
