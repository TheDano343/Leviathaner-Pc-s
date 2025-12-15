<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Orden;
use App\Models\OrdenDetalles;

use Illuminate\Http\Request;

class CompradoController extends Controller
{
    public function index()
    {
        $ordenDetalles = OrdenDetalles::where('users_id', auth()->user()->id)->get();
        return view('comprados.index', compact('ordenDetalles'));
    }
}
