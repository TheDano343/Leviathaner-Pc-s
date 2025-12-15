<?php

namespace App\Http\Controllers;


use App\Models\Carrito;
use App\Models\Equipo;
use App\Models\PagosRealizados;

use Session;
use Stripe;

use Illuminate\Http\Request;

class PagosRealizadosController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
     public function index()
     {
        $carritos = Carrito::all();
        return view('pagos.index', compact('carritos'));
    }



    // public function checkout() 
    public function checkout(Request $request)
    {   
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $carritos = Carrito::all();
        $totalPrice = 0;

        foreach($carritos as $carrito)
        
        
         $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                'price_data' => [
                    'currency' => 'mxn',
                    'product_data' => [
                        'name' => 'Total a Pagar',
                    ],
                    'unit_amount' => $totalPrice = $totalPrice + $carrito->Precio * 100,
                ],
                'quantity' => $carrito->quantity,
            ],
        ],
         
        'mode' => 'payment',
        'success_url' => route('success'),
        'cancel_url' => route('cancel'),
        ]);
        
        return redirect()->away($session->url);

    
    }

        public function success()
        {
            $carritos = Carrito::all();
            return to_route('detalles.index');
        }

        public function cancel()
        {
        $carritos = Carrito::all();
        return to_route('carrito.index');
        }

    
    // /**
    //  * Show the form for creating a new resource.
    //  */
    public function create()
    {
    //     //
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request)
     {
        
     }

    // /**
    //  * Display the specified resource.
    //  */
     public function show(PagosRealizados $pagosRealizados)
     {
    //     //
     }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
     public function edit(PagosRealizados $pagosRealizados)
     {
         //
     }

    // /**
    //  * Update the specified resource in storage.
    //  */
     public function update(Request $request, PagosRealizados $pagosRealizados)
    {
         //
    }

    // /**
    //   * Remove the specified resource from storage.
    //   */
     public function destroy(PagosRealizados $pagosRealizados)
     {
         //
     }
}
