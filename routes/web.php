<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\NumerosController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\RelacionController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AlbunesController;
use App\Http\Controllers\DniController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProductosController;

use App\Http\Controllers\ConsultaDniController;

Route::get('/consulta-dni', [ConsultaDniController::class, 'showForm']);
Route::post('/consulta-dni', [ConsultaDniController::class, 'consultarDni']);

Route::resource('alumnos', AlumnosController::class);

Route::resource('evento', EventoController::class);


Route::get('/', function () {
    return view('welcome');
});

//RUTAS DE CONTROLADOR ALUMNOS
Route::resource('alumnos', AlumnosController::class);


//RUTAS DE CONTROLADOR CURSOS
Route::resource('cursos', CursosController::class);

//RUTAS DE CONTROLADOR NUMEROS
Route::resource('numeros', NumerosController::class);

//RUTAS DE CONTROLADOR JUGADORES
Route::resource('jugadores', JugadoresController::class);

//RUTAS DE CONTROLADOR RELACION ENTRE CURSOS Y ALUMNOS
Route::resource('relacion', RelacionController::class);

//RUTAS DE CONTROLADOR PERFIL
Route::resource('perfil', PerfilController::class);

//RUTAS DE CONTROLADOR ALBUNES
Route::resource('albunes', AlbunesController::class);

//RUTAS DE CONTROLADOR PRODUCTOS
Route::resource('productos', ProductosController::class);










///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
