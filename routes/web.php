<?php

use App\Http\Controllers\AjustesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DificultadController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VideosController;

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


// crud de categorias
Route::get('/categorias/edit/{id}', [CategoriasController::class, 'edit'])->middleware(['auth', 'admin'])->name('categorias.edit');
Route::put('/categorias/edit/{id}', [CategoriasController::class, 'update'])->middleware(['auth', 'admin'])->name('categorias.update');
Route::get('/categorias/create', [CategoriasController::class, 'create'])->middleware(['auth', 'admin'])->name('categorias.create');
Route::post('/categorias/create', [CategoriasController::class, 'store'])->middleware(['auth', 'admin'])->name('categorias.store');
Route::delete('/categorias/delete/{id}', [CategoriasController::class, 'destroy'])->middleware(['auth', 'admin'])->name('categorias.delete');

// crud de roles
Route::get('/roles', [RolesController::class, 'index'])->middleware(['auth', 'admin'])->name('roles');
Route::get('/roles/edit/{id}', [RolesController::class, 'edit'])->middleware(['auth', 'admin'])->name('roles.edit');
Route::put('/roles/edit/{id}', [RolesController::class, 'update'])->middleware(['auth', 'admin'])->name('roles.update');
Route::get('/roles/create', [RolesController::class, 'create'])->middleware(['auth', 'admin'])->name('roles.create');
Route::post('/roles/create', [RolesController::class, 'store'])->middleware(['auth', 'admin'])->name('roles.store');
Route::delete('/roles/delete/{id}', [RolesController::class, 'destroy'])->middleware(['auth', 'admin'])->name('roles.delete');

// crud de usuarios
Route::get('/usuarios', [UsuariosController::class, 'index'])->middleware(['auth', 'admin'])->name('usuarios');
Route::get('/usuarios/edit/{id}', [UsuariosController::class, 'edit'])->middleware(['auth', 'admin'])->name('usuarios.edit');
Route::put('/usuarios/edit/{id}', [UsuariosController::class, 'update'])->middleware(['auth', 'admin'])->name('usuarios.update');
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->middleware(['auth', 'admin'])->name('usuarios.create');
Route::post('/usuarios/create', [UsuariosController::class, 'store'])->middleware(['auth', 'admin'])->name('usuarios.store');
Route::delete('/usuarios/delete/{id}', [UsuariosController::class, 'destroy'])->middleware(['auth', 'admin'])->name('usuarios.delete');

// subir video
Route::get('/upload', [UploadController::class, 'index'])->middleware(['auth', 'verified', 'entrenador'])->name('upload');
Route::post('/upload', [UploadController::class, 'store'])->middleware(['auth', 'verified', 'entrenador'])->name('upload.pendiente');


// videos pendientes
Route::get('/videospendientes', [UploadController::class, 'pendiente'])->middleware(['auth', 'verified', 'admin'])->name('videos.pendientes');
Route::get('/videospendientes/{id}', [UploadController::class, 'pendienteView'])->middleware(['auth', 'verified', 'admin'])->name('videos.pendientes.view');
Route::put('/videospendientes/{id}', [UploadController::class, 'pendienteUpdate'])->middleware(['auth', 'verified', 'admin'])->name('videos.pendientes.update');
Route::delete('/videospendientes/{id}', [UploadController::class, 'pendienteDelete'])->middleware(['auth', 'verified', 'admin'])->name('videos.pendientes.delete');

// videos subidos
Route::get('/videossubidos', [UploadController::class, 'subido'])->middleware(['auth', 'verified', 'admin'])->name('videos.subidos');
Route::get('/video/{id}', [VideosController::class, 'index'])->middleware(['auth', 'verified'])->name('videos.subidos.view');
Route::get('/video/borrar/{id}', [VideosController::class, 'destroy'])->middleware(['auth', 'verified'])->name('videos.subidos.delete');

// comentarios
Route::post('/video/comentar', [ComentariosController::class, 'store'])->middleware(['auth', 'verified'])->name('comentarios.store');
Route::get('/video/comentar/borrar/{id}', [ComentariosController::class, 'destroy'])->middleware(['auth', 'verified'])->name('comentario.eliminar');

// perfil
Route::get('/perfil', [PerfilController::class, 'index'])->middleware(['auth', 'verified'])->name('perfil');

// Ajustes
Route::get('/ajustes', [AjustesController::class, 'index'])->middleware(['auth', 'verified'])->name('ajustes');
Route::put('/ajustes', [AjustesController::class, 'update'])->middleware(['auth', 'verified'])->name('ajustes.update');

require __DIR__.'/auth.php';
