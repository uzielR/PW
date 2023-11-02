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
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/almacen', 'metodoalmacen')->name('apodoalmacen');
    Route::get('/almRegistro', 'metodoalmacenRegistro')->name('apodoalmacenRegistro');
    Route::get('/compras', 'metodocompras')->name('apodocompras');
    Route::get('/gerencia', 'metodogerencia')->name('apodogerencia');
    /* Route::get('/modal', 'metodomodal')->name('apodomodal'); */
    Route::post('/editarProducto','metodoeditarProducto')->name('apodoeditarProducto');
});