<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // cria alguns usuários
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
        ]);
        User::factory()->create([
            'name' => 'Christian Ramires',
            'email' => 'christian.ramires@example.com',
        ]);

        // cria algumas cidades
        $this->call(CidadeSeeder::class);

        // cria alguns médicos
        $this->call(MedicoSeeder::class);
    }
}
