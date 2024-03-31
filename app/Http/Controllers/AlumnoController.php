<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Seccion;
use App\Models\Aula;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AlumnosImport;
use App\Exports\AlumnosExport;
use Illuminate\Support\Facades\Session;


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

    public function crear(Request $request)
{
    if ($request->isMethod('get')) {
        $alumnos = Alumno::all(); 
        $secciones = Seccion::all(); 
        $aulas = Aula::all(); 
        return view('form.crear', compact('alumnos', 'secciones', 'aulas'));
    }
    
    elseif ($request->isMethod('post')) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'seccion_id' => 'required|integer',
            'aula_id' => 'required|integer',
        ]);

        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->id_seccion = $request->seccion_id;
        $alumno->id_aula = $request->aula_id;

       
        if ($alumno->save()) {
            Session::flash('success', 'Alumno creado correctamente.');
        } else {
            Session::flash('success', 'Error al crear el alumno. Por favor, inténtelo de nuevo.');
        }
        
        return redirect()->route('alumnos.crear');
    }
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

    public function eliminar($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
    
        return redirect()->route('alumnos.filtrar')->with('success', 'Alumno eliminado correctamente.');
    }
    
}

