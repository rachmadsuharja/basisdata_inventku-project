<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

//AUTH
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class,'postLogin'])->name('postlogin');
    Route::get('register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('admin')->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::resource('items', ItemController::class);
    Route::get('logout', [AdminController::class,'logout'])->name('admin.logout');
});

// Route::middleware('client')->group(function () {
//     Route::get('client', [ClientController::class, 'index'])->name('client');
// });
