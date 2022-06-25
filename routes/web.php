<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DificultadController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified', 'pago', 'dificultad'])->name('dashboard');

Route::get('contact', [ContactController::class, 'create'])->name('contact');
Route::get('payment', [PaymentController::class, 'create'])->middleware(['auth','verified'])->name('payment');
Route::post('payment', [PaymentController::class, 'update'])->name('payment');
Route::get('primerospasos', [DificultadController::class, 'create'])->middleware(['auth','verified', 'pago'])->name('p.pasos');
Route::post('primerospasos', [DatosController::class, 'store'])->middleware(['auth','verified', 'pago'])->name('datos');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified', 'pago', 'dificultad'])->name('dashboard');
Route::get('/categorias', [CategoriasController::class, 'index'])->middleware(['auth', 'verified'])->name('categorias');



Route::get('/categorias/edit/{id}', [CategoriasController::class, 'edit'])->middleware(['auth', 'admin'])->name('categorias.edit');
Route::put('/categorias/edit/{id}', [CategoriasController::class, 'update'])->middleware(['auth', 'admin'])->name('categorias.update');
Route::get('/categorias/create', [CategoriasController::class, 'create'])->middleware(['auth', 'admin'])->name('categorias.create');
Route::post('/categorias/create', [CategoriasController::class, 'store'])->middleware(['auth', 'admin'])->name('categorias.store');
Route::delete('/categorias/delete/{id}', [CategoriasController::class, 'destroy'])->middleware(['auth', 'admin'])->name('categorias.delete');

Route::get('/roles', [RolesController::class, 'index'])->middleware(['auth', 'admin'])->name('roles');
Route::get('/roles/edit/{id}', [RolesController::class, 'edit'])->middleware(['auth', 'admin'])->name('roles.edit');
Route::put('/roles/edit/{id}', [RolesController::class, 'update'])->middleware(['auth', 'admin'])->name('roles.update');
Route::get('/roles/create', [RolesController::class, 'create'])->middleware(['auth', 'admin'])->name('roles.create');
Route::post('/roles/create', [RolesController::class, 'store'])->middleware(['auth', 'admin'])->name('roles.store');
Route::delete('/roles/delete/{id}', [RolesController::class, 'destroy'])->middleware(['auth', 'admin'])->name('roles.delete');

Route::get('/usuarios', [UsuariosController::class, 'index'])->middleware(['auth', 'admin'])->name('usuarios');
Route::get('/usuarios/edit/{id}', [UsuariosController::class, 'edit'])->middleware(['auth', 'admin'])->name('usuarios.edit');
Route::put('/usuarios/edit/{id}', [UsuariosController::class, 'update'])->middleware(['auth', 'admin'])->name('usuarios.update');
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->middleware(['auth', 'admin'])->name('usuarios.create');
Route::post('/usuarios/create', [UsuariosController::class, 'store'])->middleware(['auth', 'admin'])->name('usuarios.store');
Route::delete('/usuarios/delete/{id}', [UsuariosController::class, 'destroy'])->middleware(['auth', 'admin'])->name('usuarios.delete');

require __DIR__.'/auth.php';
