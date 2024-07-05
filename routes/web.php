<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directoriosController;
use App\Http\Controllers\contactosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio',
            [directoriosController::class, 'mostrarDirectorio'])->name('directorio.principal');


Route::get('/directorio/mostrar/agregarNuevo',
            [directoriosController::class, 'mostrarAgregarNuevo'])->name('agregarNvoDirectorio.mostrar');


Route::get('/directorio/agregar/nuevo',
            [directoriosController::class, 'crearNuevoDirectorio'])->name('directorio.agregarNuevo');

Route::get('/directorio/buscar', 
            [directoriosController::class, 'mostrarBuscarEntrada'])->name('buscarEntradas.buscar');

Route::get('/directorio/ver',
            [directoriosController::class, 'verContactos'])->name('directorio.verContactos');

Route::get('/directorio/eliminar',
            [directoriosController::class, 'mostrarEliminar'])->name('directorio.eliminar.mostrar');

Route::get('/directorio/eliminar/cancelar',
            [directoriosController::class, 'eliminacionCancelar'])->name('directorio.eliminar.cancelar');

Route::get('/directorio/buscar/regresar',
            [directoriosController::class, 'cancelarBusqueda'])->name('directorio.buscar.regresar');

Route::get('/directorio/agregar/nuevo/guardar',
            [directoriosController::class, 'guardarNuevoDirectorio'])->name('directorio.agregarNuevo.guardar');
