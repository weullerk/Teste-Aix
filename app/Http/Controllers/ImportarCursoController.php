<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ImportarCurso extends Controller
{
    public function index(Request $request)
    {
        return view('importar_curso');
    }
}
