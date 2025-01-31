<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoRequest;
use App\Http\Resources\MedicoResource;
use App\Models\Cidade;
use App\Models\Medico;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index(Request $request, Cidade|null $cidade = null): JsonResponse
    {
        $medicos = Medico::query()
            ->when($request->has('nome'), function ($q) use ($request) {
                // Remove os prefixos "dr" e "dra" (com ou sem ponto, e maiúsculas/minúsculas)
                $nome = preg_replace('/^\s*(dr\.?|dra\.?)\s+/i', '', $request->nome);

                $q->where('nome', 'LIKE', "%{$nome}%");
            })
            ->when(!is_null($cidade), fn($q) => $q->where('cidade_id', $cidade->id))
            ->orderBy('nome')
            ->get();

        return response()->json(MedicoResource::collection($medicos));
    }

    public function store(MedicoRequest $request): JsonResponse
    {
        $medico = Medico::create($request->validated());

        return response()->json(new MedicoResource($medico), 201);
    }
}
