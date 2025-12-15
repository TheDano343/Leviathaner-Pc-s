<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function index()
    {
        $carritos = OrdenDetalle::all();
        return view('detalles.index', compact('carritos'));
    }
}
