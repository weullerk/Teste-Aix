<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.aluno.index');
    }

    public function cadastrar(Request $request)
    {
        return view('pages.aluno.form');
    }

    public function editar($id, Request $request)
    {
        return view('pages.aluno.form');
    }
}
