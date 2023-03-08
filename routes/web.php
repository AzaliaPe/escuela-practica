<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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

//Index - Listar
Route::get('/alumnos', [AlumnosController::class,'index'])
    ->name('alumnos.index');

//Create - Formulario de creacion
Route::get('/alumnos/create', [AlumnosController::class,'create'])
    ->name('alumnos.create');

//Store - Almacenar un nuevo registro
Route::post('/alumnos', [AlumnosController::class,'store'])
    ->name('alumnos.store');

//Edit - Formulario de edicion
// localhost:8000/5/edit
Route::get('/alumnos/{id}/edit', [AlumnosController::class,'edit'])
    ->name('alumnos.edit');

Route::put('/alumnos/{id}', [AlumnosController::class,'update'])
    ->name('alumnos.update');

Route::get('/alumnos/{id}/delete', [AlumnosController::class,'delete'])
    ->name('alumnos.delete');

Route::delete('alumnos/{id}', [AlumnosController::class,'destroy'])
    ->name('alumnos.destroy');