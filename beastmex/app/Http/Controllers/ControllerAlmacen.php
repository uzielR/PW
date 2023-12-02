<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorBeastmex;
use DB;
use Carbon\Carbon;
class ControllerAlmacen extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consR=DB::table('tb_productos')->get();/* consulta */
        return view('almacen',compact('consR')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return view('almacen2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorBeastmex $request)
    {
        //
        
        if ($request->hasFile('ImagenProducto')) {
            $imagen = $request->file('ImagenProducto');
            $rutaImagen = $imagen->store('', 'public'); // Guardar la imagen en el disco público
        } else {
            $rutaImagen = null;
        }
        

        DB::table('tb_productos')->insert([
            'NombreProducto' => $request->input('NombreProducto'),
            'NombreMarca' => $request->input('NombreMarca'),
            'CostoProducto' => $request->input('CostoProducto'),
            'FechaIngreso' => Carbon::now(),
            'PrecioVenta' => $request->input('PrecioVenta'),
            "updated_at"=>Carbon::now(),
            'ImagenProducto' => $rutaImagen, // Guardar la ruta de la imagen en la base de datos
        ]);
        return redirect('/almacen2')->with('confirmacion', 'Tu recuerdo llegó al controlador');
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
    public function update(validadorBeastmex $request, string $id)
    {
        //
        if ($request->hasFile('ImagenProducto')) {
            $imagen = $request->file('ImagenProducto');
            $rutaImagen = $imagen->store('', 'public'); // Guardar la imagen en el disco público
        } else {
            $rutaImagen = null;
        }
        
        DB::table('tb_productos')->where('id',$id)->update([
            'NombreProducto' => $request->input('NombreProducto'),
            'NombreMarca' => $request->input('NombreMarca'),
            'CostoProducto' => $request->input('CostoProducto'),
            'FechaIngreso' =>$request->input('FechaIngreso') ,
            'PrecioVenta' => $request->input('PrecioVenta'),
            "updated_at"=>Carbon::now(),
            'ImagenProducto' => $rutaImagen, // Guardar la ruta de la imagen en la base de datos
            
        ]);
        return redirect('/almacen')->with('confirmacion', 'Tu recuerdo llegó al controlador');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
