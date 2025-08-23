<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cars', [\App\Http\Controllers\CarController::class, 'index']);