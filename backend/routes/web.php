<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserrController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ViagemController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('userrs', UserrController::class);

Route::resource('veiculos', VeiculoController::class);

Route::resource('viagems', ViagemController::class);
