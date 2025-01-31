<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'especialidade' => 'required|string|max:255',
            'cidade_id' => 'required|exists:cidades,id',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome deve ter no máximo 255 caracteres.',
            'especialidade.required' => 'O campo especialidade é obrigatório.',
            'especialidade.string' => 'O campo especialidade deve ser uma string.',
            'especialidade.max' => 'O campo especialidade deve ter no máximo 255 caracteres.',
            'cidade_id.required' => 'O campo cidade_id é obrigatório.',
            'cidade_id.exists' => 'O campo cidade_id deve ser um ID de cidade válido. Você pode consultar as cidades disponíveis na rota /cidades.',
        ];
    }
}
