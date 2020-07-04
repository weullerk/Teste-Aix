<?php


namespace App\Http\Controllers;


use App\Services\CursoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{
    public function index(Request $request)
    {
        $data = [];

        $service = new CursoService();
        $data['cursos'] = $service->listarRecursivo();

        return view('pages.curso.index', $data);
    }

    public function cadastrar(Request $request)
    {
        $data = [];

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
               'curso' => 'required',
               'matricula' => 'required',
                'situacao' => 'required'
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
            $validator = Validator::make($request->all(), [
                'curso' => 'required',
                'matricula' => 'required',
                'situacao' => 'required'
            ]);

            if (!$validator->fails()) {
                if ($service->editar($id, $request->all())) {
                    $data['message'] = "Curso editado com sucesso!";
                } else {
                    $data['message'] = "Falha ao editar o curso!";
                }
            } else {
                $data['message'] = "Falha ao editar o curso! As informações não foram preenchidas.";
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
