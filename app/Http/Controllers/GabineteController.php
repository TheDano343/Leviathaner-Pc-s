<?php

namespace App\Http\Controllers;

use App\Models\Gabinete;
use App\Models\EstatusEntidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GabineteController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $gabinetes = Gabinete::where('Nombre_del_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Marca','LIKE','%'.$busqueda.'%')
        ->orWhere('Tipo_de_estuche','LIKE','%'.$busqueda.'%')
        ->orWhere('Usos_recomendados_para_el_producto','LIKE','%'.$busqueda.'%')
        ->orWhere('Color','LIKE','%'.$busqueda.'%')
        ->orWhere('Material','LIKE','%'.$busqueda.'%')
        ->orWhere('Metodo_de_enfriamiento','LIKE','%'.$busqueda.'%')
        ->orWhere('Nombre_del_modelo','LIKE','%'.$busqueda.'%')
        ->orWhere('Luces_de_colores','LIKE','%'.$busqueda.'%')
        ->orWhere('Tamaño_de_ventilador','LIKE','%'.$busqueda.'%')
        ->orWhere('Descripcion','LIKE','%'.$busqueda.'%')


        ->latest('idGabinetes')
        ->paginate(10);
        return view('Gabinete.index',compact('gabinetes','busqueda'));
    }

    // public function clean()
    // {
    //     $gabinetes = Gabinete::paginate(10);
    //     return view('Gabinete.index', compact('gabinetes'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gabinetes = Gabinete::all();
        $estatusEntidad = EstatusEntidad::all(); 
        return view('Gabinete.create',compact('gabinetes','estatusEntidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // $params : Almacena un arreglo de datos que resultan de la validacion, se usara para realizar el envio de la instacia Gabinete.
      $params = $request->validate([
        'Nombre_del_producto' => 'required|unique:gabinetes',
        'Marca' => 'required',
        'Tipo_de_estuche' => 'required',
        'Usos_recomendados_para_el_producto' => 'required',
        'Color' => 'required',
        'Material' => 'required',
        'Metodo_de_enfriamiento' => 'required',
        'Nombre_del_modelo' => 'required',
        'Luces_de_colores' => 'required',
        'Tamaño_de_ventilador' => 'required',
        'Descripcion' => 'required',
        'estatusentidad_id' => 'required',
        'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))//Verifica si hay una campo del tipo FILE
        {
            // $path : Se almacena en la imagen cuando es positivo
            // $request->file('Portada') : sirve para obtener el archivo de portada
            // store('upload','public'); : se utiliza para almacenar archivos públicos, como imágenes, videos o documentos, en el directorio storage/app/public. 
            $path = $request->file('Portada')->store('upload','public');

            // Sirve para asignar la ruta de la imagen en el arreglo de datos
            $params['Portada'] = $path;
        }

        Gabinete::create($params);
        return redirect()->route('gabinete.index')->with('success','Registro Agregado');

    }

    /**
     * Display the specified resource.
     */
    public function show(Gabinete $gabinete)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gabinete $gabinete)
    { 
        $estatusEntidades = EstatusEntidad::all(); 
        return view('gabinete.edit', compact('gabinete','estatusEntidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gabinete $gabinete)
    {
       
        // $data: Almacena un arreglo de datos que resultan de la validacion, se usara para realizar la actualizacion de la instacia Gabinete.
        // $request: valida los datos de la solicitud
       $data = $request->validate([
        'Nombre_del_producto' => 'required|unique:gabinetes',
        'Marca' => 'required',
        'Tipo_de_estuche' => 'required',
        'Usos_recomendados_para_el_producto' => 'required',
        'Color' => 'required',
        'Material' => 'required',
        'Metodo_de_enfriamiento' => 'required',
        'Nombre_del_modelo' => 'required',
        'Luces_de_colores' => 'required',
        'Tamaño_de_ventilador' => 'required',
        'Descripcion' => 'required',
        'estatusentidad_id' => 'required',
        'Portada' => 'nullable'
        ]);

        if($request->hasFile('Portada'))//Verifica si hay una campo del tipo FILE
        {
            // $path : Se almacena en la imagen cuando es positivo
            // $request->file('Portada') : sirve para obtener el archivo de portada
            // store('upload','public'); : se utiliza para almacenar archivos públicos, como imágenes, videos o documentos, en el directorio storage/app/public. 
            $path = $request->file('Portada')->store('upload','public');

            // Sirve para asignar la ruta de la imagen en el arreglo de datos
            $data['Portada'] = $path;
        }
        
        $gabinete->update($data);
        return redirect()->route('gabinete.index')->with('update','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gabinete $gabinete)
    {
        $gabinete->delete();
        return redirect()->route('gabinete.index')->with('destroy','Registro Elimado');
    }
}
