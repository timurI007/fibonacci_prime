<?php

use App\Http\Controllers\MathController;
use Illuminate\Support\Facades\Route;

Route::get('/math/fibonacci', [MathController::class, 'fibonacci']);
Route::get('/math/is-prime', [MathController::class, 'isPrime']);