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



/* 
Rutas para la autenticacion de usuarios
*/

Route::get('/auth/loginPropietario', [LoginController::class, 'loginPropietario'])->name('auth.loginPropietario');
Route::post('/auth/checkPropietario', [LoginController::class, 'checkPropietario'])->name('auth.checkPropietario');
Route::get('/auth/loginPiscicultor', [LoginController::class, 'loginPiscicultor'])->name('auth.loginPiscicultor');
Route::post('/auth/checkPiscicultor', [LoginController::class, 'checkPiscicultor'])->name('auth.checkPiscicultor');
Route::get('/auth/logoutPropietario', [LoginController::class, 'logoutPropietario'])->name('auth.logoutPropietario');
Route::get('/auth/logoutPiscicultor', [LoginController::class, 'logoutPiscicultor'])->name('auth.logoutPiscicultor');

/*
Ruta para mostrar la tabla de alimentacion
 */
Route::get('piscicultor/tablaAlimentacion', [PiscicultorController::class, 'tablaShow'])->name('tablaAlimentacion.show')->middleware('AuthCheckPiscicultor');

/*
Ruta para generar el informe en pdf
 */
Route::get('generate-pdf/{cultivo}', [CultivoController::class, 'generatePDF'])->name('informe.show');





Route::resource('cultivos', CultivoController::class)->middleware('AuthCheckPropietario');

Route::resource('empleados', EmpleadoController::class)->parameters(['empleados' => 'Piscicultor'])->middleware('AuthCheckPropietario');

Route::group(['middleware' => 'AuthCheckPiscicultor'], function() {

Route::resource('piscicultor', PiscicultorController::class)->parameters(['piscicultor' => 'cultivo']);

Route::get('piscicultor/tablaAlimentacion/edit/{tablaAlimentacion}', [PiscicultorController::class, 'tablaEdit'])->name('tablaAlimentacion.edit');

Route::post('piscicultor/tablaAlimentacion/update/{tablaAlimentacion}', [PiscicultorController::class, 'tablaUpdate'])->name('tablaAlimentacion.update');
});
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




 
 
