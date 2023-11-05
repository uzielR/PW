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
    Route::get('/editarproveedores', 'metodoeditarproveedores')->name('apodoeditarproveedores');
    Route::get('/crearOrden', 'metodocrearOrden')->name('apodocrearOrden');
    /* VENTAS */
    Route::get('/ventas', 'metodoventas')->name('apodoventas');
    /* GERENCIA */
    Route::get('/gerenciaRegistro', 'metodogerencia')->name('apodogerencia');
    
    
    /* SESION METODO POST */
    Route::post('/login','metodologin')->name('apodologin');
    /*GUARDAR ALMCAEN */
    Route::post('/editaralmacen','metodoeditaralmacen')->name('apodoeditaralmacen');
    /*GUARDAR REGISTRO */
    Route::post('/guardarRegistro','metodoguardarRegistro')->name('apodoguardarRegistro');
});