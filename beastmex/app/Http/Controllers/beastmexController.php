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
        return view('almacen');
    }
    public function metodoalmacenRegistro(){
        return view('almaRegistro');
    }
    public function metodocompras(){
        return view('compras');
    }
    public function metodoventas(){
        return view('ventas');
    }
    

}
