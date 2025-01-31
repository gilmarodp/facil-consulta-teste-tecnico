<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/cidades', [CidadeController::class, 'index']);

Route::get('/user', [AuthController::class, 'user'])->middleware('auth:api');
