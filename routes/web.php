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
    return view('pages.index');
});

Route::get('/catalog', function () {
    return view('pages.catalog.index');
});

Route::get('/info', function () {
    return view('pages.info.index');
});

Route::get('/profile', function () {
    return view('pages.profile.index');
})->middleware('auth:sanctum');

Route::get('/profile/login', function () {
    return view('pages.profile.login');
})->name('login');

Route::get('/profile/register', function () {
    return view('pages.profile.register');
})->name('register');

Route::get('/admin', function () {
    return view('pages.admin.index');
});
