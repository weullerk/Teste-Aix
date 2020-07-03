<?php


namespace App\Http\Controllers;


use App\Services\CursoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.curso.index');
    }

    public function cadastrar(Request $request)
    {
        $data = [];

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
               'curso' => 'required',
               'matricula' => 'required'
            ]);

            if (!$validator->fails()) {
                $service = new CursoService();
                if ($service->cadastrar($request->all())) {
                    $data['message'] = "Cadastro realizado com sucesso!";
                } else {
                    $data['message'] = "Falha ao realizar o cadastro!";
                }
            }
        }

        return view('pages.curso.form', $data);
    }

    public function editar($id, Request $request)
    {
        $data = [];

        $service = new CursoService();

        if ($request->isMethod('post')) {
            if ($service->editar($id, $request->all())) {
                $data['message'] = "Curso editado com sucesso!";
            } else {
                $data['message'] = "Falha ao editar o curso!";
            }
        }

        $curso = $service->buscar($id);

        if ($curso == null) {
            return view('notfound');
        }

        $data['curso'] = $curso;

        return view('pages.curso.form', $data);
    }
}
