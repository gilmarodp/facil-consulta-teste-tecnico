<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/cidades', [CidadeController::class, 'index']);
Route::get('/medicos', [MedicoController::class, 'index']);
Route::get('/cidades/{cidade}/medicos', [MedicoController::class, 'index']);


Route::middleware('auth:api')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);

    Route::post('/medicos', [MedicoController::class, 'store']);

    Route::get('/pacientes', [PacienteController::class, 'index']);
    Route::post('/pacientes', [PacienteController::class, 'store']);
    Route::post('/pacientes/{paciente}', [PacienteController::class, 'update']);

    Route::get('/consultas', [ConsultaController::class, 'index']);
    Route::post('/medicos/consulta', [ConsultaController::class, 'store']);
});