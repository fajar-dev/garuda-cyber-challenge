<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;

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



Route::get('/', [ProductController::class, 'index']);
Route::get('/home', [ProductController::class, 'index'])->name('index');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/action', [AuthController::class, 'login_action'])->name('login_action');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register/action', [AuthController::class, 'register_action'])->name('register_action');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('add_cart')->middleware('auth');
    Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('delete_cart');
    Route::get('/checkout', [InvoiceController::class, 'checkout'])->name('checkout');
});

