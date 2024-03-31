<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\SeccionController;

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

Route::get('/crear', function () {return view('form.crear');}); 

// Route::get('/mostrar', function () {return view('form.mostrar');}); 
//alumno
// Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos', [AlumnoController::class, 'filtrar'])->name('alumnos.filtrar');
// Route::get('/crear', [AlumnoController::class, 'crear'])->name('alumnos.crear');
Route::match(['get', 'post'], '/crear', [AlumnoController::class, 'crear'])->name('alumnos.crear');

Route::delete('/alumnos/{id}', [AlumnoController::class, 'eliminar'])->name('alumnos.eliminar');






//secciones
// Route::get('/alumnos', [SeccionController::class, 'index'])->name('secciones.index');
// Route::post('/alumnos/importar', [AlumnoController::class, 'importar'])->name('alumnos.importar');
Route::post('/alumnos/importar', [AlumnoController::class, 'importar'])->name('alumnos.importar');
Route::get('/alumnos/exportar', [AlumnoController::class, 'exportar'])->name('alumnos.exportar');





Route::get('/editar', function () {return view('form.editar');}); 






