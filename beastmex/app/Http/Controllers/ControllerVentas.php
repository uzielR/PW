<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorVentas;
use DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\pdf;
use App\Models\ventas;

class ControllerVentas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cons=DB::table('_ticket_ventas')->get();/* consulta */
        return view('ventas',compact('cons')); 

    }

    public function pdf($id){
       /*  $venta = ventas::findOrFail($id);
        $cons = ventas::all(); 
        $pdf = PDF::loadView('pdf', compact('cons')); 
        return $pdf->download('ventas.pdf');  */
        $venta = ventas::findOrFail($id);

        // Obtener otros datos si es necesario
        $cons = ventas::all(); // Esto puede variar según tus necesidades de consulta

        $pdf = PDF::loadView('pdf', compact('cons')); 
        return $pdf->download('ventas.pdf'); 
        
    }
     
    
       
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ventaStock');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorVentas $request)
    {
        //
        
        DB::table('_ticket_ventas')->insert([
            'NombreCliente' => $request->input('NombreCliente'),
            'ApellidoPaterno' => $request->input('ApellidoPaterno'),
            'ApellidoMaterno' => $request->input('ApellidoMaterno'),
            'NombreProducto' => $request->input('NombreProducto'),
            'Marca5' => $request->input('Marca5'),
            'Cantidad5' => $request->input('Cantidad5'),
            'Precio5' => $request->input('Precio5'),
            "updated_at"=>Carbon::now(),
           
        ]);
        return redirect('/ventaStock')->with('confirmacion', 'Tu Nueva Venta ah llegado al controlador');
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
        
        DB::table('_ticket_ventas')->insert([
            'NombreCliente' => $request->input('NombreCliente'),
            'ApellidoPaterno' => $request->input('ApellidoPaterno'),
            'ApellidoMaterno' => $request->input('ApellidoMaterno'),
            'NombreProducto' => $request->input('NombreProducto'),
            'Marca5' => $request->input('Marca5'),
            'Cantidad5' => $request->input('Cantidad5'),
            'Precio5' => $request->input('Precio5'),
            "updated_at"=>Carbon::now(),
           
        ]);
        return redirect('/ventaStock')->with('confirmacion', 'Tu Nueva Venta ah llegado al controlador');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
