<?php

namespace App\Http\Controllers;

use App\Models\EstatusEntidad;
use Illuminate\Http\Request;

class EstatusEntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estatus = EstatusEntidad::all();
        return view('estatusEntidad.index', compact('estatus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estatus = EstatusEntidad::all();
        return view('estatusEntidad.create',compact('estatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'Nombre_Estatus' => 'required'
        ]);

        EstatusEntidad::create($request->all());
        return redirect(route('estatusEntidad.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(EstatusEntidad $estatusEntidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EstatusEntidad $estatusEntidad)
    {
        return view('estatusEntidad.edit', compact('estatusEntidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EstatusEntidad $estatusEntidad)
    {
        $data = $request->validate([
             'Nombre_Estatus' => 'required'
        ]);

        $estatusEntidad->update($data);
        return redirect(route('estatusEntidad.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EstatusEntidad $estatusEntidad)
    {
        $estatusEntidad->delete();
        return redirect(route('estatusEntidad.index'));
    }
}
