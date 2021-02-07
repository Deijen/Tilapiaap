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


Route::resource('cultivos', CultivoController::class)->middleware('AuthCheckPropietario');

Route::resource('empleados', EmpleadoController::class)->parameters(['empleados' => 'Piscicultor'])->middleware('AuthCheckPropietario');

Route::resource('piscicultor', PiscicultorController::class)->parameters(['piscicultor' => 'cultivo']);

Route::get('piscicultor/tablaAlimentacion', [PiscicultorController::class, 'tablaShow'])->name('tablaAlimentacion.show');

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




 
 
