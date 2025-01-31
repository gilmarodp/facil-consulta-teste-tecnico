<?php

namespace App\Http\Controllers;

use App\Http\Resources\CidadeResource;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index(Request $request)
    {
        $cidades = Cidade::query()
            ->when($request->has('nome'), fn ($q) => $q->where('nome', 'LIKE', "%{$request->nome}%"))
            ->orderBy('nome')
            ->get();

        return response()->json(CidadeResource::collection($cidades));
    }
}
