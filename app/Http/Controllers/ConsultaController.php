<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultaRequest;
use App\Http\Resources\ConsultaResource;
use App\Models\Consulta;
use Illuminate\Http\JsonResponse;

class ConsultaController extends Controller
{
    public function index(): JsonResponse
    {
        $consultas = Consulta::with('paciente', 'medico')->get();

        return response()->json(ConsultaResource::collection($consultas));
    }

    public function store(ConsultaRequest $request): JsonResponse
    {
        $consulta = Consulta::query()->updateOrCreate($request->validated(), $request->validated());

        return response()->json(new ConsultaResource($consulta), 201);
    }
}
