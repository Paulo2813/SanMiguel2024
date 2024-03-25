<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;


class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::all();
        return view('form.mostrar')->with('aulas', $aulas);
    }
}
