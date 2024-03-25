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
         // Alumno 2
        Alumno::create([
            'nombre' => 'Juan',
            'id_seccion' => 1,
            'id_aula' => 1,
            'evaluacion1' => 15,
            'evaluacion2' => 16,
        ]);

        // Alumno 3
        Alumno::create([
            'nombre' => 'Ana',
            'id_seccion' => 2,
            'id_aula' => 1,
            'evaluacion1' => 16,
            'evaluacion2' => 18,
        ]);

        // Alumno 4
        Alumno::create([
            'nombre' => 'Pedro',
            'id_seccion' => 3,
            'id_aula' => 3,
            'evaluacion1' => 12,
            'evaluacion2' => 19,
        ]);

        // Alumno 5
        Alumno::create([
            'nombre' => 'Luis',
            'id_seccion' => 1,
            'id_aula' => 2,
            'evaluacion1' => 17,
            'evaluacion2' => 20,
        ]);

        // Alumno 6
        Alumno::create([
            'nombre' => 'Sofía',
            'id_seccion' => 3,
            'id_aula' => 2,
            'evaluacion1' => 18,
            'evaluacion2' => 15,
        ]);

        // Alumno 7
        Alumno::create([
            'nombre' => 'Miguel',
            'id_seccion' => 2,
            'id_aula' => 3,
            'evaluacion1' => 13,
            'evaluacion2' => 14,
        ]);

        // Alumno 8
        Alumno::create([
            'nombre' => 'Lucía',
            'id_seccion' => 1,
            'id_aula' => 3,
            'evaluacion1' => 14,
            'evaluacion2' => 18,
        ]);

        // Alumno 9
        Alumno::create([
            'nombre' => 'Carlos',
            'id_seccion' => 3,
            'id_aula' => 1,
            'evaluacion1' => 16,
            'evaluacion2' => 17,
        ]);

        // Alumno 10
        Alumno::create([
            'nombre' => 'Elena',
            'id_seccion' => 2,
            'id_aula' => 1,
            'evaluacion1' => 15,
            'evaluacion2' => 19,
        ]);


    }
}
