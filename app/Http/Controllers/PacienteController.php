<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Http\Resources\PacienteResource;
use App\Models\Paciente;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $pacientes = Paciente::query()
            ->when($request->has('nome'), function ($q) use ($request) {
                $q->where('nome', 'LIKE', "%{$request->nome}%");
            })
            ->orderBy('nome')
            ->get();

        return response()->json(PacienteResource::collection($pacientes));
    }

    public function store(PacienteRequest $request): JsonResponse
    {
        $paciente = Paciente::create($request->validated());

        return response()->json(new PacienteResource($paciente), 201);
    }

    public function update(Paciente $paciente, PacienteRequest $request): JsonResponse
    {
        $paciente->update($request->only(['nome', 'celular']));

        return response()->json(new PacienteResource($paciente));
    }
}
