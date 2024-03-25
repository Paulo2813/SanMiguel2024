<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $table = 'secciones'; // Especifica el nombre de la tabla

    protected $fillable = ['seccion'];

    /**
     * Obtiene los alumnos asociados a esta sección.
     */
    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'id_seccion');
    }
}
