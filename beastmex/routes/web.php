<?php
use App\Http\Controllers\ControllerVentas;
use App\Http\Controllers\ControllerAlmacen;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* 
Route::get('/', function () {
    return view('login');
});

Route::get('/almacen', function () {
    return view('almacen');
});
Route::get('/almRegistro', function () {
    return view('almRegistro');
});
Route::get('/compras', function () {
    return view('compras');
});
 */

use App\Http\Controllers\proveedoresCrud;
use App\Http\Controllers\beastmexController;// instruccion que se necesita para hacer el controlador 
use App\Http\Controllers\ProductoController;

 Route::controller(beastmexController::class)->group(function(){
    /* LOGIN */
    Route::get('/','metodoInicio')->name('apodoInicio');
    /* ALMACEN */
    /* Route::get('/almacen', 'metodoalmacen')->name('apodoalmacen'); */
    /* Route::get('/almacen3', 'metodoalmacen3')->name('apodoalmacen3'); */
    /* Route::get('/almacen2', 'metodoalmacen2')->name('apodoalmacen2'); */
    /* COMPRAS */
    Route::get('/compras', 'metodocompras')->name('apodocompras');
    Route::match(['get', 'post'], '/comprasCrearOrden', 'metodocrearOrden')->name('apodocrearOrden');
    Route::get('/comprasVerOrden', 'metodoVerOrden')->name('apodoVerOrden');
    /* Route::get('/proveedores', 'metodoproveedores')->name('apodoproveedores'); */
    /* Route::get('/proveedoresEditar', 'metodoeditarproveedores')->name('apodoeditarproveedores'); */
    /* Route::get('/crearProveedor', 'metodocrearProveedor')->name('apodocrearProveedor'); */ 
    /* VENTAS */
    Route::get('/ventas', 'metodoventas')->name('apodoventas');
    /* Route::get('/ventaStock', 'metodoventaStock')->name('apodoventaStock'); */
    /* GERENCIA */
    Route::get('/gerenciaRegistro', 'metodoGerencia')->name('apodoGerencia');
    Route::get('/gerenciaReporte', 'consultarReportes')->name('apodoReporte');
    Route::get('/usuarios', 'listarUsuarios')->name('apodoUsuarios');

    Route::get('/ventasGrafica', 'metodoventasGrafica')->name('apodoventasGrafica');
    Route::get('/comprasGrafica', 'metodocomprasGrafica')->name('apodocomprasGrafica');
    Route::get('/gananciasGrafica', 'metodogananciasGrafica')->name('apodogananciasGrafica');
    
    /* SESION METODO POST */
    Route::post('/login','metodologin')->name('apodologin');
    /*GUARDAR ALMCAEN */
    /* Route::post('/editaralmacen','metodoeditaralmacen')->name('apodoeditaralmacen'); */
    /*GUARDAR REGISTRO */
    /* Route::post('/guardarRegistro','metodoguardarRegistro')->name('apodoguardarRegistro'); */
    Route::post('/guardarOrden','metodoguardarOrden')->name('apodoguardarOrden');
    Route::post('/guardarVenta','metodoguardarVenta')->name('apodoguardarVenta');
    Route::post('/guardareditarPreveedor','metodoguardareditarPreveedor')->name('apodoguardareditarPreveedor');
    Route::post('/crearProveedorNP','metodocrearProveedorNP')->name('apodocrearProveedorNP');
    Route::resource('Productos', ProductoController::class);
    Route::post('/guardargerenciaRegistro','metodoguardargerenciaRegistro')->name('apodoguardargerenciaRegistro');
    Route::get('/proveedoresProductos', 'metodoproveedoresProductos')->name('apodoproveedoresProductos');

    #NUVAS RUTAS CON EL NUEVO CONTROLADOR
    #ALMACEN--------------------------------------------------------------------------------------------------
   /*  Route::get('/almacen', [ControllerAlmacen::class,'create'])->name('almacen.create'); */
    Route::get('/almacen', [ControllerAlmacen::class,'index'])->name('almacen.index');
    Route::get('/almacen2', [ControllerAlmacen::class,'create'])->name('almacen2.create');
    Route::post('/GuardarProductos',[ControllerAlmacen::class,'store'])->name('GuardarProductos.store');
    Route::put('EditarProductos/{id}/confirm',[ControllerAlmacen::class,'update'])->name('editarProducto.update');
    Route::delete('/almacen/{id}', [ControllerAlmacen::class, 'destroy'])->name('almacen.destroy');
    

    #FIN DE RUTAS DE ALMACEN----------------------------------------------------------------------------------
    #NUEVAS RUTAS DE PROVEEDORES-------------------------------------------------------------------------------
    //levar solo a la ruta
    Route::get('/proveedores', [proveedoresCrud::class,'index'])->name('proveedor.index');

    //levar solo a crear proveedor
    Route::get('/proveedores/create', [proveedoresCrud::class,'create'])->name('recuerdo.create');
    Route::post('/proveedores/store',[proveedoresCrud::class,'store'])->name('proveedores.store');

    //modificar y borrar
    Route::put('/EditarProveedores/{id}/confirm',[proveedoresCrud::class,'update'])->name('proveedor.update');
    #Rutas Ventas---------------------------------------------------------------------------------------------
    Route::get('/ventas', [ControllerVentas::class,'index'])->name('ventas.index');
    Route::get('ventas/pdf/{id}', [ControllerVentas::class, 'pdf'])->name('ventas.pdf');
    Route::get('/ventaStock', [ControllerVentas::class,'create'])->name('ventas.create');
    Route::post('/GuardarVenta',[ControllerVentas::class,'store'])->name('guardarventa.store');
    Route::put('EditarVentas/{id}/confirm',[ControllerVentas::class,'update'])->name('editarventas.update');
});