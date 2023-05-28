<?php

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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login_process', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login_process');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin');

Route::get('/error', function () {
    return view('admin.error');
})->name('error');


