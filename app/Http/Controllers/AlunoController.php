<?php


namespace App\Http\Controllers;


use App\Services\CursoService;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.aluno.index');
    }

    public function cadastrar(Request $request)
    {
        $data = [];

        $cursoService = new CursoService();

        $data['cursos'] = $cursoService->listar();

        return view('pages.aluno.form', $data);
    }

    public function editar($id, Request $request)
    {
        return view('pages.aluno.form');
    }
}
