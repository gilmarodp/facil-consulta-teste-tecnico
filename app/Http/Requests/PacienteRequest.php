<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
        $rules = [
            'nome' => 'required|string|max:255',
            'celular' => 'required|string|max:20|celular_com_ddd',
        ];

        if ($this->method() === 'POST' && !$this->route('paciente')) {
            $rules['cpf'] = 'required|string|max:20|cpf|formato_cpf|unique:pacientes,cpf';
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome deve ter no máximo 255 caracteres.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.string' => 'O campo CPF deve ser uma string.',
            'cpf.max' => 'O campo CPF deve ter no máximo 20 caracteres.',
            'cpf.cpf' => 'O CPF informado é inválido.',
            'cpf.formato_cpf' => 'O CPF informado não está no formato correto.',
            'cpf.unique' => 'O CPF informado já está cadastrado.',
            'celular.required' => 'O campo celular é obrigatório.',
            'celular.string' => 'O campo celular deve ser uma string.',
            'celular.max' => 'O campo celular deve ter no máximo 20 caracteres.',
            'celular.celular_com_ddd' => 'O celular informado não está no formato correto.',
        ];
    }
}
