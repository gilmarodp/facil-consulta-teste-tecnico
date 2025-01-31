<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidades = [
            ['nome' => 'São Paulo', 'estado' => 'SP'],
            ['nome' => 'Rio de Janeiro', 'estado' => 'RJ'],
            ['nome' => 'Belo Horizonte', 'estado' => 'MG'],
            ['nome' => 'Curitiba', 'estado' => 'PR'],
            ['nome' => 'Porto Alegre', 'estado' => 'RS'],
            ['nome' => 'Salvador', 'estado' => 'BA'],
            ['nome' => 'Recife', 'estado' => 'PE'],
            ['nome' => 'Fortaleza', 'estado' => 'CE'],
            ['nome' => 'Sobral', 'estado' => 'CE'],
            ['nome' => 'Brasília', 'estado' => 'DF'],
            ['nome' => 'Goiânia', 'estado' => 'GO'],
            ['nome' => 'Manaus', 'estado' => 'AM'],
            ['nome' => 'Belém', 'estado' => 'PA'],
            ['nome' => 'Vitória', 'estado' => 'ES'],
            ['nome' => 'Florianópolis', 'estado' => 'SC'],
            ['nome' => 'Natal', 'estado' => 'RN'],
            ['nome' => 'João Pessoa', 'estado' => 'PB'],
            ['nome' => 'Teresina', 'estado' => 'PI'],
            ['nome' => 'São Luís', 'estado' => 'MA'],
            ['nome' => 'Campo Grande', 'estado' => 'MS'],
            ['nome' => 'Cuiabá', 'estado' => 'MT'],
            ['nome' => 'Palmas', 'estado' => 'TO'],
            ['nome' => 'Boa Vista', 'estado' => 'RR'],
            ['nome' => 'Macapá', 'estado' => 'AP'],
            ['nome' => 'Porto Velho', 'estado' => 'RO'],
            ['nome' => 'Rio Branco', 'estado' => 'AC'],
        ];

        foreach ($cidades as $cidade) {
            Cidade::create($cidade);
        }
    }
}
