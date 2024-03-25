<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre', 'id_seccion', 'id_aula', 'evaluacion1', 'evaluacion2'];

    public function seccion()
    {
        return $this->belongsTo(Seccion::class, 'id_seccion');
    }

    public function aula()
    {
        return $this->belongsTo(Aula::class, 'id_aula');
    }
}
