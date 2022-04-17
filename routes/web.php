<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/empresa', App\Http\Controllers\EmpresasController::class);

Route::resource('/clientes', App\Http\Controllers\ClienteController::class);

Route::get('/busquedacliente', [App\Http\Controllers\ClienteController::class, 'busqueda']);

Route::get('clientes/{id}/delate', [App\Http\Controllers\ClienteController::class, 'delate']);

Route::resource('/inventario', App\Http\Controllers\InventarioController::class);

Route::get('inventario/{id}/delate', [App\Http\Controllers\InventarioController::class, 'delate']);

Route::get('/busquedainventario', [App\Http\Controllers\InventarioController::class, 'busqueda'])->name('busqueda');

Route::resource('/obras', App\Http\Controllers\ObrasController::class);

Route::get('obras/{id}/delate', [App\Http\Controllers\ObrasController::class, 'delate']);


Route::get('/busquedaobras', [App\Http\Controllers\ObrasController::class, 'busqueda'])->name('busquedaobra');

Route::get('/buscarclientesform', [App\Http\Controllers\ClienteController::class, 'getCliente']);

Route::get('/buscarobraform', [App\Http\Controllers\ObrasController::class, 'getObra']);

Route::get('/buscarequipoform', [App\Http\Controllers\InventarioController::class, 'getInventario']);


Route::resource('/entrega', App\Http\Controllers\EntregaController::class);
