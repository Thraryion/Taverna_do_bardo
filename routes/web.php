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
    return view('site/index');
});

Route::get('/cardapio', function () {
    return view('site/cardapio');
});

Route::get('/login', function () {
    return view('site/login');
});

Route::get('/registro', function () {
    return view('site/registro');
});
