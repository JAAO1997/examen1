<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agregarcontacto',
    [ContactoController::class, 'agregarcontacto'])->name('contacto.agregar');

Route::get('/buscar',
    [ContactoController::class, 'buscar'])->name('contacto.buscar');

Route::get('/crearEntrada',
    [DirectorioController::class, 'crearEntrada'])->name('directorio.crear');

Route::get('/directorio',
    [DirectorioController::class, 'directorio'])->name('directorio');

Route::get('/eliminar',
    [ContactoController::class, 'eliminar'])->name('contacto.eliminar');

Route::get('/vercontactos',
    [DirectorioController::class, 'vercontactos'])->name('contacto.vertodo');