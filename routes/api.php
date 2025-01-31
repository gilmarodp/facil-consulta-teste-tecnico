<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:15,1');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:api');
