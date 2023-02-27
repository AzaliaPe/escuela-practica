<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnosController extends Controller
{
//
    public function index(){
        $alumnos = Alumno::all();
        $argumentos = array();
        $argumentos['alumnos'] = $alumnos;

        return view('alumnos.index', $argumentos);
    }
}