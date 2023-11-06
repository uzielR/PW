<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorBeastmex;
use App\Http\Requests\validadorCompras;
use Carbon\Carbon;
class beastmexController extends Controller
{
    //
    public function metodoInicio(){
        return view('login');
    }
    public function metodoalmacen(){
        
        return view('almacen');
    }
    public function metodoalmacen2(){
        $fecha = Carbon::now()->format('d-m-Y');

        return view('almacen2', ['fecha' => $fecha]);

    }
    public function metodocompras(){
        
        return view('compras');
    }
    
    public function metodogerencia(){
        $now = now();

        return view('gerencia', ['now' => $now]);
    }
    public function metodoventas(){
        $now = now();
        return view('ventas', ['now' => $now]);
    }




    /* public function metodomodal(){
        return view('modalesalma');
    } */
    public function metodoeditarProducto(beastmexValidador $req)
    {
        // Si la validación pasa, se llegará a este punto
        // Realiza alguna acción y luego redirige
        return redirect('/modal')->with('confirmacion', 'Tu recuerdo llegó al controlador');

        return view('gerenciaRegistro', ['now' => $now]);

    }

    public function metodoalmacen3() {
        $fecha = Carbon::now()->format('d-m-Y');
        return view('almacen3', ['fecha' => $fecha]);
    }
    
    public function consultarReportes(){
        $now = now();
        return view('gerenciaReporte', ['now' => $now]);
    }
    
    public function metodoventas(){
        
        return view('ventas');
    }
    public function metodoproveedores(){
        return view('proveedores');
    }
    public function metodoeditarproveedores(){
        
        return view('proveedoresEditar');
    }
    public function metodocrearOrden(){
        
        return view('comprasCrearOrden');
    }
    
    public function metodoVerOrden(){
        
        return view('comprasVerOrden');
    }

    public function metodocrearProveedor(){
        
        return view('crearProveedor');
    }
    
    
    public function metodoventaStock(){
        
        return view('ventaStock');
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
        $fecha = Carbon::now()->format('d-m-Y');
        return redirect('/almacen3')->with('confirmacion', 'Sus cambios fueron guardados con éxito')->with('fecha', $fecha);
    }

    public function metodoguardarRegistro(Request $request)
    {
        $request->validate([
            'Nombre_Producto' => 'required|alpha',
            'Nombre_Marca'=>'required|alpha',
            'Costo_Producto'=>'required|numeric',
            'Precio_Venta'=>'required|numeric',
            'Foto2'=>'required'
        ]);

        $fecha = Carbon::now()->format('d-m-Y');

        return redirect('/almacen2')->with('success', 'Sus cambios fueron guardados')->with('fecha', $fecha);
    }


    public function listarUsuarios(){
        $now = now();
        return view('usuarios', ['now' => $now]);
    }

    public function metodoguardarOrden(validadorCompras $request)
    {
        
        return redirect('/comprasCrearOrden')->with('success', 'Sus cambios fueron guardados');
    }
}
