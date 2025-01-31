<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pacientes = [
            ['nome' => 'João da Silva', 'cpf' => '123.456.789-10', 'celular' => '(11) 99999-9999'],
            ['nome' => 'Maria de Souza', 'cpf' => '987.654.321-20', 'celular' => '(11) 99999-9999'],
            ['nome' => 'José da Silva', 'cpf' => '123.456.789-30', 'celular' => '(11) 99999-9999'],
            ['nome' => 'Ana de Souza', 'cpf' => '987.654.321-40', 'celular' => '(11) 99999-9999'],
        ];

        foreach ($pacientes as $paciente) {
            Paciente::create($paciente);
        }
    }
}
