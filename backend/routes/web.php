<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserrController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ViagemController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {

    return view('home');

});


// LOGIN

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.auth');


// REGISTER

Route::get('/register', function () {

    return view('auth.register');

});

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');


// CRUDS

Route::resource('userrs', UserrController::class);

Route::resource('veiculos', VeiculoController::class);

Route::resource('viagems', ViagemController::class);
