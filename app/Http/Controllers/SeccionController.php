<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;

class SeccionController extends Controller
{
    public function index()
    {
        $secciones = Seccion::all();
        return view('form.mostrar')->with('secciones', $secciones);
    }
}
