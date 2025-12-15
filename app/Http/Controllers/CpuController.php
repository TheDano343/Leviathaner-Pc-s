<?php

namespace App\Http\Controllers;

use App\Models\Cpu;
use App\Models\EstatusEntidad;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $cpus = Cpu::where('Nombre_del_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Fabricante_del_cpu','LIKE','%'.$busqueda.'%')
        ->orWhere('Modelo_del_cpu','LIKE','%'.$busqueda.'%')
        ->orWhere('Velocidad_del_cpu','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')
   
        ->latest('idCpu')
        ->paginate(10);
        return view('cpu.index',compact('cpus','busqueda'));
    }

    // public function index()
    // {
    //     $cpus = Cpu::paginate(10);
    //     return view('cpu.index', compact('cpus'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cpus = Cpu::all();
        $estatusEntidad = EstatusEntidad::all(); 
        return view('cpu.create', compact('cpus','estatusEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
        'Nombre_del_producto' => 'required',
        'Fabricante_del_cpu' => 'required',
        'Modelo_del_cpu' => 'required',
        'Velocidad_del_cpu' => 'required',
        'Descripcion' => 'required',
        'estatusentidad_id' => 'required',
        'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Cpu::create($params);
        return redirect()->route('cpu.index')->with('success','Registro Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cpu $cpu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cpu $cpu)
    {
        $estatusEntidades = EstatusEntidad::all(); 
        return view('cpu.edit', compact('cpu','estatusEntidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cpu $cpu)
    {
        $data = $request->validate([
            'Nombre_del_producto' => 'required',
            'Fabricante_del_cpu' => 'required',
            'Modelo_del_cpu' => 'required',
            'Velocidad_del_cpu' => 'required',
            'Descripcion' => 'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'nullable'
            ]);
    
            if($request->hasFile('Portada'))
            {
                $path = $request->file('Portada')->store('upload','public');
                $data['Portada'] = $path;
            }
    
            $cpu->update($data);
            return redirect()->route('cpu.index')->with('update','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cpu $cpu)
    {
        $cpu->delete();
        return redirect()->route('cpu.index')->with('destroy','Registro Elimado');
    }
}
