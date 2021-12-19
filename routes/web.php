<?php

use App\Http\Controllers\Inicio\InicioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

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

/* Route::get('/', function () {
    return view('welcome');
});   */
Route::get('/', [InicioController::class, 'index'])->name('inicios.index');
Route::get('/nosotro', [InicioController::class, 'nosotro'])->name('inicios.nosotro');
Route::get('/contactano', [InicioController::class, 'contactano'])->name('inicios.contactano');
Route::post('/contactano/store', [InicioController::class, 'store'])->name('inicios.contactanos');



/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ProyectoController::class, 'datos'], function () {
    return view('admin.datos.index');
})->name('dashboard');

/* Route::get('inicios', [ProyectoController::class, 'vista'])->name('dash'); */
/* Route::get('/dashboard', [ProyectoController::class, 'create'])->name('proyectos.create'); */