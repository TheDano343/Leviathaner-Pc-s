<?php

namespace App\Http\Controllers;

use App\Models\Alimentacion;
use App\Models\EstatusEntidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlimentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $alimentaciones = Alimentacion::where('Nombre_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Nombre_modelo','LIKE','%'.$busqueda.'%')
        ->orWhere('Marca','LIKE','%'.$busqueda.'%')
        ->orWhere('Dispositivos_compatibles','LIKE','%'.$busqueda.'%')
        ->orWhere('Tipo_conector','LIKE','%'.$busqueda.'%')
        ->orWhere('Potencia_de_salida','LIKE','%'.$busqueda.'%')
        ->orWhere('Factor_de_forma','LIKE','%'.$busqueda.'%')
        ->orWhere('Voltaje','LIKE','%'.$busqueda.'%')
        ->orWhere('Metodo_de_enfriamiento','LIKE','%'.$busqueda.'%')
        ->orWhere('Dimensiones_de_articulo','LIKE','%'.$busqueda.'%')
        ->orWhere('Largo_y_ancho','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')
        ->orWhere('Largo_y_ancho','LIKE','%'.$busqueda.'%')

        ->latest('idAlimentacion')
        ->paginate(10);
        return view('alimentacion.index',compact('alimentaciones','busqueda'));
    }
    
    //  public function index()
    // {
    //     $alimentaciones = Alimentacion::paginate(10);
    //     return view('alimentacion.index',compact('alimentaciones'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alimentaciones = Alimentacion::all();
        $estatusEntidad = EstatusEntidad::all(); 
        return view('alimentacion.create',compact('alimentaciones','estatusEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $params = $request->validate([
            'Nombre_producto' => 'required',
            'Nombre_modelo' => 'required',
            'Marca' => 'required',
            'Dispositivos_compatibles' => 'required',
            'Tipo_conector' => 'required',
            'Potencia_de_salida' => 'required',
            'Factor_de_forma' => 'required',
            'Voltaje' => 'required',
            'Metodo_de_enfriamiento' => 'required',
            'Dimensiones_de_articulo' => 'required',
            'Largo_y_ancho' => 'required',
            'Peso_del_producto' => 'required',
            'Descripcion' => 'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Alimentacion::create($params);
        return redirect()->route('alimentacion.index')->with('success','Registro Agregado');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Alimentacion $alimentacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alimentacion $alimentacion)
    {
        $estatusEntidades = EstatusEntidad::all(); 
        return view('alimentacion.edit', compact('alimentacion','estatusEntidades'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alimentacion $alimentacion)
    {
        $data = $request->validate([
            'Nombre_producto' => 'required',
            'Nombre_modelo' => 'required',
            'Marca' => 'required',
            'Dispositivos_compatibles' => 'required',
            'Tipo_conector' => 'required',
            'Potencia_de_salida' => 'required',
            'Factor_de_forma' => 'required',
            'Voltaje' => 'required',
            'Metodo_de_enfriamiento' => 'required',
            'Dimensiones_de_articulo' => 'required',
            'Largo_y_ancho' => 'required',
            'Peso_del_producto' => 'required',
            'Descripcion' => 'required',
            'estatusentidad_id' => 'required',
            'Portada' => 'nullable'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $alimentacion->update($data);
        return redirect()->route('alimentacion.index')->with('update','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alimentacion $alimentacion)
    {
        $alimentacion->delete();
        return redirect()->route('alimentacion.index')->with('destroy','Registro Elimado');
    }
}
