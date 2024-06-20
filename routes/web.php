<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

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

// Guest routes
Route::get('/login', [UserController::class, 'index'])->name('login.index');
Route::post('/auth', [UserController::class, 'login'])->name('login.auth');
Route::get('/register', [UserController::class, 'create'])->name('register.index');
Route::post('/create', [UserController::class, 'store'])->name('register.store');

Route::prefix('/')->group(function () {
    Route::get('', [MainController::class ,'index'])->name('dashboard.index');
    Route::get('/category/{category}', [MainController::class ,'category'])->name('dashboard.category.page');

});
