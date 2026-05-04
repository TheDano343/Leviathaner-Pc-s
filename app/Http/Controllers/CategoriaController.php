<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorium = Cache::remember('categorium',9,function(){
            sleep(4);
            return Categoria::paginate(9);
        });
        return view('categorium.index', compact('categorium'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorium = Categoria::all();
        Cache::put('categorium', $categorium, 9);
        return view('categorium.create',compact('categorium'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|unique:categorias'
        ]);
        Categoria::create($request->all());
        return redirect()->route('categorium.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categorium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categorium)
    {
        return view('categorium.edit', compact('categorium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categorium)
    {
         $data = $request->validate([
            'Nombre' => 'required|unique:categorias'
        ]);

        $categorium->update($data);
        return redirect()->route('categorium.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categorium)
    {
        $categorium->delete();
        return redirect()->route('categorium.index');
    }
}
