<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aula;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de nombres de aulas
        $aulas = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

        // Iterar sobre el array y crear registros en la tabla Aulas
        foreach ($aulas as $aula) {
            Aula::create([
                'aula' => $aula
            ]);
        }
    }
}
