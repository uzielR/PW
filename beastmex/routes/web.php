<?php

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

use App\Http\Controllers\beastmexController;// instruccion que se necesita para hacer el controlador 
use App\Http\Controllers\ProductoController;

 Route::controller(beastmexController::class)->group(function(){
    /* LOGIN */
    Route::get('/','metodoInicio')->name('apodoInicio');
    /* ALMACEN */
    Route::get('/almacen', 'metodoalmacen')->name('apodoalmacen');
    Route::get('/almacen3', 'metodoalmacen3')->name('apodoalmacen3');
    Route::get('/almacen2', 'metodoalmacen2')->name('apodoalmacen2');
    /* COMPRAS */
    Route::get('/compras', 'metodocompras')->name('apodocompras');
    Route::get('/proveedores', 'metodoproveedores')->name('apodoproveedores');
    Route::get('/proveedoresEditar', 'metodoeditarproveedores')->name('apodoeditarproveedores');
    Route::match(['get', 'post'], '/comprasCrearOrden', 'metodocrearOrden')->name('apodocrearOrden');
    Route::get('/comprasVerOrden', 'metodoVerOrden')->name('apodoVerOrden');
    Route::get('/crearProveedor', 'metodocrearProveedor')->name('apodocrearProveedor');
    /* VENTAS */
    Route::get('/ventas', 'metodoventas')->name('apodoventas');
    Route::get('/ventaStock', 'metodoventaStock')->name('apodoventaStock');
    /* GERENCIA */
    Route::get('/gerenciaRegistro', 'metodoGerencia')->name('apodoGerencia');
    Route::get('/gerenciaReporte', 'consultarReportes')->name('apodoReporte');
    Route::get('/usuarios', 'listarUsuarios')->name('apodoUsuarios');
    Route::get('/usuariosEditar', 'metodoEditarUsuarios')->name('apodoEditarUsuarios');
    
    
    /* SESION METODO POST */
    Route::post('/login','metodologin')->name('apodologin');
    /*GUARDAR ALMCAEN */
    Route::post('/editaralmacen','metodoeditaralmacen')->name('apodoeditaralmacen');
    /*GUARDAR REGISTRO */
    Route::post('/guardarRegistro','metodoguardarRegistro')->name('apodoguardarRegistro');
    Route::post('/guardarOrden','metodoguardarOrden')->name('apodoguardarOrden');
    
    Route::resource('Productos', ProductoController::class);
});