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
        return view('gerenciaRegistro1', ['now' => $now]);
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
        return redirect ()->route('proveedor.index');
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
        return redirect ()->route('almacen.index');
    }   
    public function metodoproveedoresProductos(){
        
        return view('proveedoresProductos');
    }
    public function metodoventasGrafica(){
        
        return view('/ventasGrafica');
    }


    public function metodocomprasGrafica(){
        
        return view('/comprasGrafica');
    }
    

    public function metodogananciasGrafica(){
        
        return view('/gananciasGrafica');
    }

    public function metodoeditaralmacen(validadorBeastmex $req)
    {
        $fecha = Carbon::now()->format('d-m-Y');
        return redirect('/almacen3')->with('confirmacion', 'Sus cambios fueron guardados con éxito')->with('fecha', $fecha);
    }

    public function metodoguardarRegistro(Request $request)
    {
        
        $fecha = Carbon::now()->format('d-m-Y');

        return redirect('/almacen2')->with('success', 'Sus cambios fueron guardados')->with('fecha', $fecha);
    }


    public function listarUsuarios(){
        $now = now();
        return view('usuarios', ['now' => $now]);
    }

    public function metodoguardarOrden(Request $req)
    {
        $req->validate([
            'Empresa'=>'required|alpha',
            'DireccionEmpresa'=>'required|alpha',
            'Dirrecion'=>'required',
            'Condado'=>'required',
            'Codigopostal'=>'required|numeric|min:4',
            'Telefono'=>'required|numeric|min:10',
            'Empresa1'=>'required|alpha',
            'DireccionEmpresa1'=>'required|alpha',
            'Dirrecion1'=>'required',
            'Condado1'=>'required',
            'Codigopostal1'=>'required|numeric|min:4',
            'Telefono1'=>'required|numeric|min:10'
        ]);

        return redirect('/comprasCrearOrden')->with('success', 'Sus cambios fueron guardados');
    }
    public function metodoguardarVenta(Request $request)
    {
        $request->validate([
            'NombreCiente' => 'required|alpha',
            'ApellidoPaterno'=>'required|alpha',
            'ApellidoMaterno'=>'required|alpha',
            'NombreProducto'=>'required|alpha',
            'Marca5'=>'required',
            'Cantidad5'=>'required|numeric',
            'Precio5'=>'required|numeric'
        ]);

        return redirect('/ventaStock')->with('success', 'Sus cambios fueron guardados');
    }
    public function metodoguardareditarPreveedor(Request $request)
    {
        $request->validate([
            'NombreEmpresa' => 'required|alpha',
            'Marca3'=>'required|alpha',
            'Direccion3'=>'required',
            'Direccion4'=>'required',
            'CodigoPostal1'=>'required|numeric|min:4',
            'telefono3'=>'required|numeric|min:10',
            'correo2'=>'required|email'
        ]);

        return redirect('/proveedoresEditar')->with('success', 'Sus cambios fueron guardados');
    }
    public function metodocrearProveedorNP(Request $req)
    {
        $req->validate([
            'NombreNP' => 'required|alpha',
            'apellidoPaternoNP'=>'required|alpha',
            'apellidoMaternoNP'=>'required|alpha',
            'nombreEmpresaNP'=>'required|alpha',
            'marcaNP'=>'required|alpha',
            'direccionNP'=>'required',
            'direccion2NP'=>'required',
            'codigoPostalNP'=>'required|numeric|min:4',
            'telefonoNP'=>'required|numeric|min:10',
            'correoNP'=>'required|email'
        ]);


        return redirect('/crearProveedor')->with('success', 'Proveedor registrado con exito');

    }
    
    public function metodoguardargerenciaRegistro(Request $req)
    {
        $req->validate([
            'Empresa2' => 'required|alpha',
            'Nombre2'=>'required|alpha',
            'app'=>'required|alpha',
            'apm'=>'required|alpha',
            'correo3'=>'required|alpha',
            'area2'=>'required',
            'Puesto2'=>'required',
            'Contraseña2'=>'required|numeric|min:4',
            'Contraseña3'=>'required|numeric|min:10'
        ]);


        return redirect('/gerenciaRegistro')->with('success', 'Proveedor registrado con exito');

    }
}
