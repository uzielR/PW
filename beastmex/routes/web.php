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

Route::get('/', function () {
    return view('login');
});

Route::get('/almacen', function () {
    return view('almacen');
});
Route::get('/modal', function () {
    return view('modal');
});
Route::get('/almRegistro', function () {
    return view('almRegistro');
});
Route::get('/compras', function () {
    return view('compras');
});