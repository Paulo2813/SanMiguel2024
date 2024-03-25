<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Seccion;
use App\Models\Aula;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AlumnosImport;
use App\Exports\AlumnosExport;


class AlumnoController extends Controller
{
    /**
     * Muestra una lista de los alumnos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all(); 
        $secciones = Seccion::all(); 
        $aulas = Aula::all(); 
        return view('form.mostrar', compact('alumnos', 'secciones', 'aulas')); 
    }

    public function filtrar(Request $request)
    {
        
        $seccionId = $request->seccion_id;
        $aulaId = $request->aula_id;
        $nombre = $request->nombre;

        
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

        
        $secciones = Seccion::all();
        $aulas = Aula::all();

       
        return view('form.mostrar', compact('alumnos', 'secciones', 'aulas'));
    }

    public function crear()
    {
        $alumnos = Alumno::all(); 
        $secciones = Seccion::all(); 
        $aulas = Aula::all(); 
        return view('form.crear', compact('alumnos', 'secciones', 'aulas')); // Pasar las variables a la vista mostrar.blade.php
    }

    public function importar(Request $request)
    {
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->getRealPath();

            // Importar los datos utilizando la clase de importación AlumnosImport
            Excel::import(new AlumnosImport, $path);
        }

        return back();
    }

    public function exportar()
    {
        $alumnos = Alumno::all();

        return Excel::download(new AlumnosExport($alumnos), 'alumnos.xlsx');
    }
}

