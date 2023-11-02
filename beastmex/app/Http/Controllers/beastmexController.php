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
        $now = now();
        return view('almRegistro', ['now' => $now]);
    }
    public function metodocompras(){
        $now = now();
        return view('compras', ['now' => $now]);
    }

    

}
