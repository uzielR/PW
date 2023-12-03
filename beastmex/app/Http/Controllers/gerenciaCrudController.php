<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorMgrRegistro;
use DB;
use Carbon\Carbon;


class gerenciaCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        /* Si quisieramos un parametro, lo agregamos en el parentesis del "get" */
        $consR = DB::table('usuariosbm')->get();/* consulta */
        /* En caso de requerir más variables, vamos a poner una comma y dentro del parentesis de compact(), ahí se agrega */
        return view('gerenciaVistaUsuarios', compact('consR'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/gerenciaRegistro');
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
        //
    }
}
