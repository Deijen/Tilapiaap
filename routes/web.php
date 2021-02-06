<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CultivoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use phpDocumentor\Reflection\Types\Resource_; 
use App\Http\Controllers\PiscicultorController;

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


Route::get('/', HomeController::class)->name('home'); 

Route::get('/auth/loginPropietario', [LoginController::class, 'loginPropietario'])->name('auth.loginPropietario');
Route::post('/auth/checkPropietario', [LoginController::class, 'checkPropietario'])->name('auth.checkPropietario');
Route::get('/auth/loginPiscicultor', [LoginController::class, 'loginPiscicultor'])->name('auth.loginPiscicultor');
Route::post('/auth/checkPiscicultor', [LoginController::class, 'checkPiscicultor'])->name('auth.checkPiscicultor');


//Route::get('/', [SesionController::class, 'iniciarLogin'])->name('inicioSesion');


//Route::post('login', [LoginController::class, 'authenticate'])->name('inicio');

/* Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}/', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}/', [CursoController::class, 'destroy'])->name('cursos.destroy'); */

Route::resource('cultivos', CultivoController::class)->middleware('AuthCheckPropietario');

Route::resource('empleados', EmpleadoController::class)->parameters(['empleados' => 'Piscicultor']);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::resource('piscicultor', PiscicultorController::class);

////////////////
/**
 * Ruta para asignar piscicultores
 */
Route::get('empleado/{id_piscicultor}/cultivo/{id_cultivo}', [EmpleadoController::class, 'asignarPiscicultor'])->name('asignarEmpleado');

////////////////
/**
 * Ruta para crear piscicultores y asignarle la id del propietario
 */

 Route::post('idPropietario/{Propietario}', [EmpleadoController::class, 'crearPiscicultor'])->name('crearEmpleado');
///////////////////




 
 
