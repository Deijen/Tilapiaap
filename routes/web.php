<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CultivoController;
use App\Http\Controllers\EmpleadoController;
use phpDocumentor\Reflection\Types\Resource_;

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

/* Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}/', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}/', [CursoController::class, 'destroy'])->name('cursos.destroy'); */

Route::resource('cultivos', CultivoController::class);

<<<<<<< HEAD
//Route::resource('cursos', CursoController::class);
=======
Route::resource('empleados', EmpleadoController::class);
>>>>>>> af88a5e40842eeae2ce8b81d7bd80d9780b93cbb

Route::view('nosotros', 'nosotros')->name('nosotros');