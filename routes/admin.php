<?php

use App\Http\Controllers\BeneficiadoController;
use App\Http\Controllers\CarreraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TechnicalController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\NavidadController;
use App\Http\Controllers\OrquestaController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\ReconocimientoController;
use App\Http\Controllers\SembrandoController;
use App\Http\Controllers\ValorController;
use App\Http\Controllers\VoluntarioController;

Route::resource('proyecto', ProyectoController::class)->names('admin.proyectos');
Route::resource('technical', TechnicalController::class)->names('admin.technicals');
Route::resource('promocion', PromocionController::class)->names('admin.promocions');
Route::resource('carrera', CarreraController::class)->names('admin.carreras');
Route::resource('estudiante', EstudianteController::class)->names('admin.estudiantes');
Route::resource('orquesta', OrquestaController::class)->names('admin.orquestas');
Route::resource('mesaje', MensajeController::class)->names('admin.mensajes');
Route::resource('voluntario', VoluntarioController::class)->names('admin.voluntarios');
Route::resource('sembrando', SembrandoController::class)->names('admin.sembrandos');
Route::resource('beneficiado', BeneficiadoController::class)->names('admin.beneficiados');
Route::resource('equipo', EquipoController::class)->names('admin.equipos');
Route::resource('valor', ValorController::class)->names('admin.valors');
Route::resource('galeria', GaleriaController::class)->names('admin.galerias');
Route::resource('foto', FotoController::class)->names('admin.fotos');
Route::resource('reconocimiento', ReconocimientoController::class)->names('admin.reconocimientos');

Route::get('frontend', [EquipoController::class, 'vista'])->name('frontent');


Route::get('importacion', [ControlController::class, 'vistaindex'])->name('importacion');

Route::get('inicios', [ProyectoController::class, 'vista'])->name('dash');

Route::get('datos', [ProyectoController::class, 'datos'])->name('datos');


Route::resource('navidades/navidad', NavidadController::class)->names('admin.navidads');

Route::get('technical/carrera/{promocion}', [CarreraController::class, 'vista'])->name('admin.carreras.vista');
Route::get('technical/carrera/crear/{promocion}', [CarreraController::class, 'crear'])->name('admin.carreras.crear');

Route::get('technical/carrera/estudiante/{carrera}', [EstudianteController::class, 'vista'])->name('admin.estudiantes.vista');

Route::post('technical/carrera/estudiante', [EstudianteController::class, 'eliminar'])->name('admin.estudiantes.eliminar'); 

Route::get('technical/carrera/estudiante/crear/{carrera}', [EstudianteController::class, 'crear'])->name('admin.estudiantes.crear');


Route::post('technical/carrera/estudiante/import/{carrera}', [EstudianteController::class, 'importExcel'])->name('admin.estudiantes.import');

Route::get('navidades', [NavidadController::class, 'vista'])->name('admin.navidads.vista');
Route::get('navidades/navidad/crear/{navidad}', [NavidadController::class, 'crear'])->name('admin.navidads.crear');
Route::post('navidades/navidad/import/{navidad}', [NavidadController::class, 'importExcel'])->name('admin.navidads.import');
Route::get('navidades/navidad/actividad/{navidad}', [NavidadController::class, 'mirar'])->name('admin.mavidads.mirar');
Route::post('navidades/navidad/actividad', [NavidadController::class, 'eliminar'])->name('admin.navidads.eliminar');

Route::get('voluntarios', [VoluntarioController::class, 'vista'])->name('admin.voluntarios.vista');
Route::get('voluntario/crear/{voluntario}', [VoluntarioController::class, 'crear'])->name('admin.voluntarios.crear');
Route::post('voluntario/import/{voluntario}', [VoluntarioController::class, 'importExcel'])->name('admin.voluntarios.import');

Route::get('sembrando/crear/{sembrando}', [SembrandoController::class, 'crear'])->name('admin.sembrandos.crear');
Route::post('sembrando/creando', [SembrandoController::class, 'creando'])->name('admin.sembrandos.creando');
Route::post('sembrando/eliminando/beneficiado', [SembrandoController::class, 'eliminar'])->name('admin.sembrandos.eliminar');
/* Route::post('import-list-excel/{carrera}', [EstudianteController::class, 'importExcel'])->name('admin.estudiantes.import'); */
 
/* 
Route::get('', [ProyectoController::class, 'create'])->name('proyectos.create');

Route::get('', [ProyectoController::class, 'index'])->name('proyectos.index'); */

Route::get('control/{proyecto}', [ControlController::class, 'vista'])->name('admin.proyectos.vista');
Route::get('control/crear/{proyecto}', [ControlController::class, 'crear'])->name('admin.proyectos.crear');
Route::post('control/import/{proyecto}', [ControlController::class, 'importExcel'])->name('admin.proyectos.import');

Route::get('importacion/crearts', [ControlController::class, 'crearts'])->name('admin.importaciones.crearts');
Route::post('importacion/imports', [ControlController::class, 'imports'])->name('admin.importaciones.imports');
