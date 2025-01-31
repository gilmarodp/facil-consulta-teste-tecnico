<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaRequest extends FormRequest
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
            'paciente_id' => ['required', 'exists:pacientes,id'],
            'medico_id' => ['required', 'exists:medicos,id'],
            'data' => ['required', 'date_format:Y-m-d H:i:s'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'paciente_id.required' => 'O campo paciente_id é obrigatório.',
            'paciente_id.exists' => 'O paciente informado não existe.',
            'medico_id.required' => 'O campo medico_id é obrigatório.',
            'medico_id.exists' => 'O médico informado não existe.',
            'data.required' => 'O campo data é obrigatório.',
            'data.date_format' => 'O campo data deve ser uma data válida no formato Y-m-d H:i:s.',
        ];
    }
}
