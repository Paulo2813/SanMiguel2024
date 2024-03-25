<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Alumno;

class AlumnosImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Alumno([
            'nombre' => $row['nombre'],
            'id_seccion' => $row['id_seccion'],
            'id_aula' => $row['id_aula'],
            'evaluacion1' => $row['evaluacion1'],
            'evaluacion2' => $row['evaluacion2'],
        ]);
    }
}
