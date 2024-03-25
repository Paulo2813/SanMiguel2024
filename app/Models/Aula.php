<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $fillable = ['aula'];

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'id_aula');
    }
}
