<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DificultadController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'pago'])->name('dashboard');

Route::get('contact', [ContactController::class, 'create'])->name('contact');
Route::get('payment', [PaymentController::class, 'create'])->middleware(['auth','verified'])->name('payment');
Route::post('payment', [PaymentController::class, 'update'])->name('payment');
Route::get('primerospasos', [DificultadController::class, 'create'])->middleware(['auth','verified', 'pago'])->name('p.pasos');

require __DIR__.'/auth.php';
