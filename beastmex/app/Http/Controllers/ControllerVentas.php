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
        $consR = DB::table('tb_productos')
                    ->where('estatus', 1) // Filtrar por estatus igual a 1
                    ->get();

        $cons = DB::table('tb_ticket_ventas')
        ->join('tb_productos', 'tb_ticket_ventas.id', '=', 'tb_productos.idProducto')
        ->select(
            'tb_ticket_ventas.id',
            'tb_ticket_ventas.updated_at',
            'tb_ticket_ventas.NombreCliente',
            'tb_ticket_ventas.ApellidoPaterno',
            'tb_ticket_ventas.ApellidoMaterno',
            'tb_productos.NombreProducto',
            'tb_ticket_ventas.Marca5',
            'tb_ticket_ventas.Cantidad5',
            'tb_ticket_ventas.Precio5',
            'tb_ticket_ventas.Total'
        )->get();
                

        return view('ventas', compact('cons', 'consR')); 
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
        // Obtener todos los productos disponibles
        $productos = DB::table('tb_productos')->where('estatus', 1)->get();
        
        return view('ventaStock', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorVentas $request)
    {
        //
            // Obtener el total de la venta
        $total = $request->input('Cantidad5') * $request->input('Precio5');

        // Calcular la ganancia restando el costo al total
        $costo = $request->input('CostoProducto'); // Asegúrate de obtener el costo del producto desde tu formulario
        $ganancia = $total - ($request->input('Cantidad5') * $costo);

        // Insertar los datos en la tabla de ventas
        DB::table('tb_ticket_ventas')->insert([
            'NombreCliente' => $request->input('NombreCliente'),
            'ApellidoPaterno' => $request->input('ApellidoPaterno'),
            'ApellidoMaterno' => $request->input('ApellidoMaterno'),
            'NombreProducto' => $request->input('NombreProducto'),
            'Marca5' => $request->input('Marca5'),
            'Cantidad5' => $request->input('Cantidad5'),
            'Precio5' => $request->input('Precio5'),
            'Total' => $total,
            "updated_at" => Carbon::now(),
        ]);

        // Insertar la ganancia en la tabla de ganancias
        DB::table('tb_ganancias')->insert([
            'NombreCliente' => $request->input('NombreCliente'),
            'ApellidoPaterno' => $request->input('ApellidoPaterno'),
            'ApellidoMaterno' => $request->input('ApellidoMaterno'),
            'Ganancia' => $ganancia,
            "updated_at" => Carbon::now(),
        ]);

        return redirect('/ventaStock')->with('confirmacion', 'Tu nueva venta ha sido registrada con éxito');
        
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
        
        DB::table('tb_ticket_ventas')->insert([
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
