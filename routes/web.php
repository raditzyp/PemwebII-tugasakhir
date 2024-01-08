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

Route::get('/login', function () {
    return view('login'); // Ganti 'login' dengan nama view yang sesuai untuk halaman login Anda
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/', function () {
    return view('welcome');
});
