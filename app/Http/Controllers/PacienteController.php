<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Http\Resources\PacienteConsultaResource;
use App\Http\Resources\PacienteResource;
use App\Models\Medico;
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

    public function update(PacienteRequest $request, Paciente $paciente): JsonResponse
    {
        $paciente->update($request->validated());

        return response()->json($paciente->only('nome', 'celular'));
    }

    public function pacientesPorMedico(Request $request, Medico $medico): JsonResponse
    {
        $pacientes = Paciente::query()
            ->whereHas('consultas', function ($q) use ($request, $medico) {
                $q->where('medico_id', $medico->id)
                    ->when($request->boolean('apenas-agendadas'), function ($q) use ($request) {
                        $q->where('data', '>', now()->format('Y-m-d H:i:s'));
                    });
            })
            ->when($request->has('nome'), function ($q) use ($request) {
                $q->where('nome', 'LIKE', "%{$request->nome}%");
            })
            ->get()
            ->sortBy('consulta.data');

        return response()->json(PacienteConsultaResource::collection($pacientes));
    }
}
