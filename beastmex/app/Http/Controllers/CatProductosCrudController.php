<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCatProductos;
use DB;
use Carbon\Carbon;



class CatProductosCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        /* Si quisieramos un parametro, lo agregamos en el parentesis del "get" */
        $consR = DB::table('catalogo_productos')->get();/* consulta */
        /* En caso de requerir más variables, vamos a poner una comma y dentro del parentesis de compact(), ahí se agrega */
        return view('catalogoProductos', compact('consR'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/catalogoRegistro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCatProductos $request)
    {
        //
        DB::table('catalogo_productos')->insert([
            "productBrand" => $request->input('txtproductBrand'),
            "productName" => $request->input('txtproductName'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/catalogoProductos')->with('confirmacion', 'Tu registro quedó guardado');
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
    public function update(validadorCatProductos $request, string $id)
    {
        //
        DB::table('catalogo_productos')->where('id', $id)->update([
            "productBrand" => $request->input('txtproductBrand'),
            "productName" => $request->input('txtproductName'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect('/catalogoProductos')->with('success', 'El registro se modificó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('catalogo_productos')->where('id', $id)->delete();
        return redirect('/catalogoProductos')->with('confirmacion','Tu producto se ELIMINÓ de la base de datos');
    }
}
