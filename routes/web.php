<?php

use App\Models\Finanza;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DispositivoController;


Route::get('/empleado', [DispositivoController::class, 'index'])->name('empleado.index');
Route::post('/dispositivo/store', [DispositivoController::class, 'store'])->name('dispositivo.store');
Route::delete('/dispositivo/{id}', [DispositivoController::class, 'destroy'])->name('dispositivo.destroy');
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route Hooks - Do not delete//
	Route::view('finanzas', 'livewire.finanzas.index')->middleware('auth');
	Route::view('proveedores', 'livewire.proveedores.index')->middleware('auth');
	Route::view('clientes', 'livewire.clientes.index')->middleware('auth');
	Route::view('servicios', 'livewire.servicios.index')->middleware('auth');
	Route::view('productos', 'livewire.productos.index')->middleware('auth');

