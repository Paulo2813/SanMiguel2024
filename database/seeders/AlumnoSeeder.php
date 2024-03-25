<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Crea algunos alumnos de ejemplo
         Alumno::create([
            'nombre' => 'Juan',
            'id_seccion' => 1,
            'id_aula' => 1,
            'evaluacion1' => 15,
            'evaluacion2' => 18,
        ]);

        Alumno::create([
            'nombre' => 'María',
            'id_seccion' => 2,
            'id_aula' => 2,
            'evaluacion1' => 14,
            'evaluacion2' => 17,
        ]);

    }
}
