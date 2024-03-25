<?php
namespace App\Exports;

use App\Models\Alumno;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlumnosExport implements FromCollection, WithHeadings
{
    protected $alumnos;

    public function __construct($alumnos)
    {
        $this->alumnos = $alumnos;
    }

    public function collection()
    {
        return $this->alumnos;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'ID Sección',
            'ID Aula',
            'Evaluación 1',
            'Evaluación 2',
            'Creado el',
            'Actualizado el',
        ];
    }
}
