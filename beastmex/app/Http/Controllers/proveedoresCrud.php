<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\proveedoresVal;
use App\Http\Requests\proveedoresValEdit;
use DB;
use Carbon\Carbon;
class proveedoresCrud extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consR = DB::table('proveedores')
                ->where('estatus', 1) // Filtrar por estatus igual a 1
                ->get();
        return view('proveedores',compact('consR')); 

        
    }

    public function search(Request $request)
    {
        $search_query = $request->input('search_query');

        $consR = DB::table('proveedores')
            ->where('estatus', 1)
            ->where(function ($query) use ($search_query) {
                $query->where('id', 'LIKE', "%$search_query%")
                    ->orWhere('nombreEmpresa', 'LIKE', "%$search_query%");
            })
            ->get();

        return view('proveedores', compact('consR'));
    }
    
    public function create()
    {
        return view('crearProveedor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(proveedoresVal $request)
    {
        
        DB::table('proveedores')->insert([
                "nombre"=> $request->input('NombreNP'),
                "apellidoP"=>$request->input('apellidoPaternoNP'),
                "apellidoM"=>$request->input('apellidoMaternoNP'),
                "nombreEmpresa"=>$request->input('nombreEmpresaNP'),
                "marca"=>$request->input('marcaNP'),
                "direccion"=>$request->input('direccionNP'),
                "direccion2"=>$request->input('direccion2NP'),
                "codigoPostalphp"=>$request->input('codigoPostalNP'),
                "telefono"=>$request->input('telefonoNP'),
                "correoE"=>$request->input('correoNP'),
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now(),
            ]);
    
    
            return redirect('/proveedores')->with('success', 'Proveedor registrado con exito');
    
        
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }
    
    public function update(proveedoresValEdit $request, string $id)
    {   
     
        DB::table('proveedores')->where('id', $id)->update([

            "nombreEmpresa" => $request -> input('nombreEmpresaNP'),
            "marca" => $request -> input('marcaNP'),
            "direccion" => $request -> input('direccionNP'),
            "direccion2" => $request -> input('direccion2NP'),
            "codigoPostalphp" => $request -> input('codigoPostalNP'),
            "telefono" => $request -> input('telefonoNP'),
            "correoE" => $request -> input('correoNP'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect('/proveedores')->with('confirmacionEditarProv', 'Tu recuerdo se modifico');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('proveedores')->where('id', $id)->update(['estatus' => 0]);

        return redirect('/proveedores')->with('confirmacion', 'proveedor eliminado exitosamente');
    }
}