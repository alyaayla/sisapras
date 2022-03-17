<?php

use Illuminate\Support\Facades\Route;

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

Route::get('admin', function () {
    return view('admin.index');
});

Route::get('/sapras', function () {
    return view('admin.sapras');
});

Route::get('/peminjaman', function () {
    return view('admin.peminjaman');
});

Route::get('/user', function () {
    return view('admin.user');
});

Route::get('login', function () {
    return view('login.index');
});

Route::get('/', function () {
    return view('login.index');
});

Route::get('landing', function () {
    return view('landing.index');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
