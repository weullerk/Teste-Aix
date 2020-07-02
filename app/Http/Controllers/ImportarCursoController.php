<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ImportarCurso extends Controller
{
    public function index(Request $request)
    {
        return view('pages.importar_curso.index');
    }

    public function analise(Request $request)
    {
        return view('pages.importar_curso.analise');
    }
}
