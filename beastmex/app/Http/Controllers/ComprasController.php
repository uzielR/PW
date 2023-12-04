<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

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
