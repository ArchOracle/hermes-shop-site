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

Route::get('/', function () {
    return view('index');
});

Route::get('/catalog', function () {
    return view('catalog.index');
});

Route::get('/info', function () {
    return view('info.index');
});

Route::get('/profile', function () {
    return view('profile.index');
})->middleware('auth');

Route::get('/profile/login', function () {
    return view('profile.login');
})->name('login');

Route::get('/profile/register', function () {
    return view('profile.register');
})->name('register');

Route::get('/admin', function () {
    return view('admin.index');
});
