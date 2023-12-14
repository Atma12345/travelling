<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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


Route::get('/',[\App\Http\Controllers\PostController::class,'home']);
Route::get('/search',[\App\Http\Controllers\PostController::class,'search']);

Route::get('/kesehatan',function () {
    return '';
});
Route::get('/hello',function () {
    echo '<h2 style="text-align: center"><u>Welcome to my web</u></h2>';
});
Route::get('/guru',function () {
    return view('guru');
});
Route::get('/home',[PostController::class, 'home']);

Route::get('/siswa',function () {
    return view('siswa');
});
Route::get('/tampil',[PostController::class, 'tampil']);

Route::get('/search',[PostController::class, 'search']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register',[AuthController::class, 'register'])->name('register');
    Route::post('/register',[AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('loginPost');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home2',[HomeController::class, 'index']);
    Route::delete('/logout',[AuthController::class, 'logout'])->name('logout');
});
Route::resource('/posts', \App\Http\Controllers\PostController::class);
