<?php

namespace Database\Seeders;

use App\Models\Medico;
use Illuminate\Database\Seeder;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medicos = [
            ['nome' => 'José Silva', 'especialidade' => 'Cardiologista', 'cidade_id' => 1],
            ['nome' => 'Ana Paula', 'especialidade' => 'Neurologista', 'cidade_id' => 1],
            ['nome' => 'Carlos Mendes', 'especialidade' => 'Oftalmologista', 'cidade_id' => 1],
            ['nome' => 'Maria Oliveira', 'especialidade' => 'Pediatra', 'cidade_id' => 2],
            ['nome' => 'Joana Santos', 'especialidade' => 'Psiquiatra', 'cidade_id' => 2],
            ['nome' => 'Pedro Lima', 'especialidade' => 'Urologista', 'cidade_id' => 2],
            ['nome' => 'João Souza', 'especialidade' => 'Ortopedista', 'cidade_id' => 3],
            ['nome' => 'Lucas Rocha', 'especialidade' => 'Endocrinologista', 'cidade_id' => 3],
            ['nome' => 'Mariana Alves', 'especialidade' => 'Gastroenterologista', 'cidade_id' => 3],
            ['nome' => 'Ana Costa', 'especialidade' => 'Ginecologista', 'cidade_id' => 4],
            ['nome' => 'Fernanda Lima', 'especialidade' => 'Reumatologista', 'cidade_id' => 4],
            ['nome' => 'Ricardo Silva', 'especialidade' => 'Nefrologista', 'cidade_id' => 4],
            ['nome' => 'Carlos Pereira', 'especialidade' => 'Dermatologista', 'cidade_id' => 5],
            ['nome' => 'Beatriz Souza', 'especialidade' => 'Hematologista', 'cidade_id' => 5],
            ['nome' => 'Rafael Costa', 'especialidade' => 'Oncologista', 'cidade_id' => 5],
        ];

        foreach ($medicos as $medico) {
            Medico::create($medico);
        }
    }
}
