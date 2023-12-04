<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorMgrRegistro;
use DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\pdf;
use App\Models\gerencia;


class gerenciaCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $consR = DB::table('usuariosbm')
                ->where('estatus', 1) // Filtrar por estatus igual a 1
                ->get();
        return view('gerenciaVistaUsuarios',compact('consR')); 

        
    }
    

    public function indexG()
    {
        
        $productos = DB::table('tb_productos')
        ->where('estatus', 1)
        ->get();

        // Preparar datos para la gráfica
        $graficaData = [['productos', 'Costo', 'PrecioVenta']];
        foreach ($productos as $item) {
            $graficaData[] = [$item->NombreProducto, (float) $item->CostoProducto, (float) $item->PrecioVenta];
        }

    return view('/graficaGanancias', compact('productos', 'graficaData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/gerenciaRegistro');
    }

    public function createG()
    {
        //
        return view('/graficaGanancias');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorMgrRegistro $request)
    {
        //
        DB::table('usuariosbm')->insert([
            'AreaUsuario' => $request->input('txtAreaUsuario'),
            'ApellidoPaternoUsuario' => $request->input('txtApellidoPaternoUsuario'),
            'ApellidoMaternoUser' => $request->input('txtApellidoMaternoUser'),
            'NombreUsuario' => $request->input('txtNombreUsuario'),
            'emailUsuario' => $request->input('txtemailUsuario'),
            'posicionUsuario' => $request->input('txtposicionUsuario'),
            'passwordUsuario' => $request->input('txtpasswordUsuario'),
            'passwordUsuario_confirmation' => $request->input('txtpasswordUsuario_confirmation'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/gerenciaVistaUsuarios')->with('confirmacion', 'Tu registro llegó al controlador');
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
        DB::table('usuariosbm')->where('id', $id)->update([
            'AreaUsuario' => $request->input('txtAreaUsuario'),
            'ApellidoPaternoUsuario' => $request->input('txtApellidoPaternoUsuario'),
            'ApellidoMaternoUser' => $request->input('txtApellidoMaternoUser'),
            'NombreUsuario' => $request->input('txtNombreUsuario'),
            'emailUsuario' => $request->input('txtemailUsuario'),
            'posicionUsuario' => $request->input('txtposicionUsuario'),
            'passwordUsuario' => $request->input('txtpasswordUsuario'),
            'passwordUsuario_confirmation' => $request->input('txtpasswordUsuario_confirmation'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect('/gerenciaVistaUsuarios')->with('confirmacionEditarUser', 'El registro se modificó');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cambiar el estatus a 0 para indicar que está inactivo (eliminado lógicamente)
        DB::table('usuariosbm')->where('id', $id)->update(['estatus' => 0]);

        return redirect('/gerenciaVistaUsuarios')->with('confirmacion', 'Usuario eliminado exitosamente');
    }


    public function pdf($id){
        $gerencia = gerencia::findOrFail($id);
    
        // Obtener otros datos si es necesario
        $cons = gerencia::all(); // Esto puede variar según tus necesidades de consulta
    
        $pdf = PDF::loadView('pdfgerencia', compact('cons')); // 'pdf' es el nombre de tu vista para el PDF
        return $pdf->download('gerencia.pdf');
    }

}