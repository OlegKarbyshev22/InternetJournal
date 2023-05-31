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

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('auth')->name('admin');
Route::get('/admin/articles', [\App\Http\Controllers\AdminController::class, 'articles'])->middleware('auth')->name('admin.articles');
Route::get('/admin/articles/create', [\App\Http\Controllers\AdminController::class, 'createArticle'])->middleware('auth')->name('createArticle');
Route::post('/admin/articles/create_process', [\App\Http\Controllers\AdminController::class, 'storeArticle'])->middleware('auth')->name('storeArticle');

Route::get('/admin/authors', [\App\Http\Controllers\AdminController::class, 'authors'])->middleware('auth')->name('admin.authors');
Route::post('/admin/authors/create_process', [\App\Http\Controllers\AdminController::class, 'authors'])->middleware('auth')->name('admin.authors');

Route::get('/error', function () {
    return view('admin.error');
})->name('error');


