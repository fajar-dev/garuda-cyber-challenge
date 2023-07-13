<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/action', [AuthController::class, 'login_action'])->name('login_action');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/action', [AuthController::class, 'register_action'])->name('register_action');
