<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HojaDeVidaController;



//RUTA DE INICIO 
Route::get('/', function () {
    return view('welcome');
});
//RUTA DE CONTACTARNOS POR FORMULARIO
Route::get('/contactenos', function () {
    return view('contactenos');
});

//RUTA DONDE INGRESA EL USUARIO
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');});

//RUTAS DE HOJA DE VIDA
Route::resource('/hojadevida', HojaDeVidaController::class);









/* 
//RUTA DONDE ESTA LA HOJA DE VIDA CON SU INFORMACION
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {Route::get('/cv',[HojadevidaController::class, 'index'])->name('hojadevida.index');});
//RUTAS DE LA HOJA DE VIDA 
Route::get('hojadevida/create',[HojadevidaController::class, 'create'])->name('hojadevida.create');
Route::post('hojasdevidas',[HojadevidaController::class, 'store'])->name('hojadevida.store');
Route::get('hojadevida/{hojadevida}',[HojadevidaController::class, 'show'])->name('hojadevida.show');
Route::get('hojasdevidas/{hojadevida}/edit',[HojadevidaController::class, 'edit'])->name('hojadevida.edit');
Route::put('hojasdevidas/{hojadevida}',[HojadevidaController::class, 'update'])->name('hojadevida.update');


Route::get('/datos', function () {return view('datos');});

Route::get('/habilidades', function () {return view('habilidades');});

Route::get('/idiomas', function () {return view('idiomas');});

Route::get('/perfil', function () {return view('perfil');});

Route::get('/cvtexto', function () {return view('cvtexto');});

Route::get('/experiencia', function () {return view('experiencia');});

Route::get('/estudios', function () {return view('estudios');});




 */

