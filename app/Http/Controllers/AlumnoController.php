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
        $secciones = Seccion::all(); // Obtener todas las secciones
        $aulas = Aula::all(); // Obtener todas las aulas
        return view('form.mostrar', compact('alumnos', 'secciones', 'aulas')); // Pasar las variables a la vista mostrar.blade.php
    }

    /**
     * Filtra los alumnos por sección y aula.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filtrar(Request $request)
{
    // Obtener los IDs de sección y aula del request
    $seccionId = $request->seccion_id;
    $aulaId = $request->aula_id;
    $nombre = $request->nombre;

    // Filtrar los alumnos según los IDs de sección, aula y nombre
    $alumnosQuery = Alumno::query();
    if ($seccionId) {
        $alumnosQuery->where('id_seccion', $seccionId);
    }
    if ($aulaId) {
        $alumnosQuery->where('id_aula', $aulaId);
    }
    if ($nombre) {
        $alumnosQuery->where('nombre', 'like', '%' . $nombre . '%');
    }
    $alumnos = $alumnosQuery->get();

    // Obtener todas las secciones y aulas para el filtro
    $secciones = Seccion::all();
    $aulas = Aula::all();

    // Devolver la vista con los datos de alumnos, secciones y aulas
    return view('form.mostrar', compact('alumnos', 'secciones', 'aulas'));
}

}

