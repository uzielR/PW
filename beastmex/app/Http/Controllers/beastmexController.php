<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\beastmexValidador;

class beastmexController extends Controller
{
    //
    public function metodoInicio(){
        return view('login');
    }
    public function metodoalmacen(){
        $now = now();
        return view('almacen', ['now' => $now]);
    }
    public function metodoalmacenRegistro(){

<<<<<<< HEAD
=======

>>>>>>> origin
        $now = now();
        return view('almRegistro', ['now' => $now]);

    }
    public function metodocompras(){
        $now = now();
        return view('compras', ['now' => $now]);
    }
    public function metodogerencia(){
        $now = now();
        return view('gerenciaRegistro', ['now' => $now]);
    }
    /* public function metodomodal(){
        return view('modalesalma');
    } */
    public function metodoeditarProducto(beastmexValidador $req)
    {
        // Si la validación pasa, se llegará a este punto
        // Realiza alguna acción y luego redirige
        return redirect('/modal')->with('confirmacion', 'Tu recuerdo llegó al controlador');
    }


    

}
