<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;

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
Route::get('payment', [PaymentController::class, 'create'])->middleware(['auth','verified','pago'])->name('payment');
Route::post('payment', [PaymentController::class, 'update'])->name('payment');

require __DIR__.'/auth.php';
