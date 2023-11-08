<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorBeastmex;
use App\Http\Requests\validadorCompras;
use Illuminate\Support\Carbon;

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
    public function metodoalmacen2(){
        $now = now();
        return view('almacen2', ['now' => $now]);

    }
    public function metodocompras(){        
        $now = now();  
        return view('compras', ['now' => $now]);
    }
    
    public function metodogerencia(){
        $now = now();
        return view('gerenciaRegistro', ['now' => $now]);
    }

    public function metodoalmacen3() {
        $now = now();
        return view('almacen3', ['now' => $now]);
    }
    
    public function consultarReportes(){
        $now = now();
        return view('gerenciaReporte', ['now' => $now]);
    }
    
    public function metodoventas(){
        $now = now();       
        return view('ventas', ['now' => $now]);
    }
    public function metodoproveedores(){
        $now = now();           
        return view('proveedores', ['now' => $now]);
    }
    public function metodoeditarproveedores(){
        $now = now();  
        return view('proveedoresEditar', ['now' => $now]);
    }
    public function metodocrearOrden(){
        $now = now(); 
        return view('comprasCrearOrden', ['now' => $now]);
    }
    
    public function metodoVerOrden(){
        $now = now(); 
        return view('comprasVerOrden', ['now' => $now]);
    }

    public function metodocrearProveedor(){
        $now = now(); 
        return view('crearProveedor', ['now' => $now]);
    }
    
    
    public function metodoventaStock(){
        $now = now();  
        return view('ventaStock', ['now' => $now]);
    }

    

    public function metodologin(Request $request)
    {
        $request->validate([
            'Correo' => 'required|string|email',
            'Contraseña' => 'required|string|min:8',
        ]);
    
        // Si la validación es exitosa se redirige al usuario a la página de almacen.
        return redirect()->route('apodoalmacen');
    }


    public function metodoeditaralmacen(validadorBeastmex $req)
    {
        return redirect('/almacen3')->with('confirmacion', 'Sus cambios fueron guardados con éxito');
    }

    public function metodoguardarRegistro(Request $request)
    {
        $request->validate([
            'Nombre_Producto' => 'required|alpha',
            'Nombre_Marca'=>'required|alpha',
            'Costo_Producto'=>'required|numeric',
            'Fecha_ingreso'=>'required|date',
            'Precio_Venta'=>'required|numeric',
            'Foto2'=>'required'
        ]);
        return redirect('/almacen2')->with('success', 'Sus cambios fueron guardados');
    }


    public function listarUsuarios(){
        $now = now();
        return view('usuarios', ['now' => $now]);
    }

    public function metodoguardarOrden(validadorCompras $request)
    {
        return redirect('/comprasCrearOrden')->with('success', 'Sus cambios fueron guardados');
    }

    public function metodoEditarUsuarios(){
        $now = now();
        return view('/usuariosEditar', ['now' => $now])->with('success', 'Sus cambios fueron guardados');
    }
    public function metodogerenciaEditarUsuario(Request $req)
    {
        $req->validate([
            'Em' => 'required|alpha',
            'No'=>'required|alpha',
            'Ap'=>'required|alpha',
            'Am'=>'required|alpha',
            'em'=>'required|email',
            'ar'=>'required|alpha',
            'pu'=>'required|alpha',
            'co'=>'required|alpha',
            'vc'=>'required|alpha'
        ]);

        return redirect('/gerenciaRegistroR')->with('success', 'Proveedor registrado con exito');
    }
}
