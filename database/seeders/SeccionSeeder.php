<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Seccion;
use Illuminate\Database\Seeder;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Array de nombres de secciones
        $secciones = ['Primero', 'Segundo', 'Tercero', 'Cuarto', 'Quinto'];

        // Iterar sobre el array y crear registros en la tabla Secciones
        foreach ($secciones as $seccion) {
            Seccion::create([
                'seccion' => $seccion
            ]);
        }
    }
}
