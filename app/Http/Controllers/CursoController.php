<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.curso.index');
    }

    public function cadastrar(Request $request)
    {
        return view('pages.curso.form');
    }

    public function editar($id, Request $request)
    {
        return view('pages.curso.form');
    }
}
