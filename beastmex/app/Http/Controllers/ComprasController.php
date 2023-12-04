<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consb = DB::table('tb_productos')
                    ->where('estatus', 1)
                    ->where('Cantidad', '<', 2) // Filtrar por estatus igual a 1
                    ->get();

        return view('/compras', compact('consb'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $proveedores = DB::table('proveedores')->get();
        return view('comprasCrearOrden', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $correoDestino = $request->input('correo');

        $contenidoCorreo = 'Contenido específico del correo:' . "\n";
        $contenidoCorreo .= 'Empresa: ' . $request->input('Empresa') . "\n";
        $contenidoCorreo .= 'Dirección de la empresa: ' . $request->input('DireccionEmpresa') . "\n";
        // Agrega más información relevante de la orden o detalles de productos
    
        Mail::raw($contenidoCorreo, function ($message) use ($correoDestino) {
            $message->to($correoDestino)->subject('Asunto del correo');
        });
    
        return Redirect::back('/NuevaOrden')->with('success', 'Correo enviado correctamente');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
