<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Seccion;
use App\Models\Aula;


class AlumnoController extends Controller
{
    /**
     * Muestra una lista de los alumnos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all(); // Obtener todos los alumnos
        return view('form.mostrar', compact('alumnos')); // Pasar la variable $alumnos a la vista mostrar.blade.php
    }
    public function filtrar(Request $request)
    {
        // Obtener el valor del filtro de sección del request
        //seccion
        $seccionId = $request->seccion_id;
        $seccionId = $request->seccion_id;
        //aulas
        $aulaId = $request->aula_id;
        $aulaId = $request->aula_id;

        // Obtener todos los alumnos o filtrar por sección si se especifica
        //seccion
        $alumnos = $seccionId ? Alumno::where('id_seccion', $seccionId)->get() : Alumno::all();
        //aulas
        $alumnos = $aulaId ? Alumno::where('id_aula', $aulaId)->get() : Alumno::all();


        // Obtener todas las secciones para el filtro
        //seccion
        $secciones = Seccion::all();
        //aula
        $aulas = Aula::all();

        // Devolver la vista con los datos de alumnos y secciones
        //secciony aula
        return view('form.mostrar', compact('alumnos', 'secciones'),compact('alumnos', 'aulas'));
        

    }

}
