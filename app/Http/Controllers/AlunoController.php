<?php


namespace App\Http\Controllers;


use App\Services\alunoService;
use App\Services\CursoService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        $data = [];

        $alunoService = new AlunoService();
        $data['alunos'] = $alunoService->listar()->sortDesc();

        return view('pages.aluno.index', $data);
    }

    public function cadastrar(Request $request)
    {
        $data = [];

        if ($request->isMethod('post')) {
            $form = $request->all();

            $validator = Validator::make($form, [
                'nome' => 'required',
                'matricula' => 'required',
                'situacao' => 'required',
                'cep' => 'required',
                'logradouro' => 'required',
                'numero' => 'required',
                'complemento' => 'required',
                'bairro' => 'required',
                'cidade' => 'required',
                'curso' => 'required',
                'turma' => 'required',
                'data_matricula' => 'required',
                'foto' => 'required'
            ]);

            if (!$validator->fails()) {
                $file = $request->file('foto');

                $format = $file->getMimeType();
                $fileData = encrypt($file->get());

                $form['foto_formato'] = $format;
                $form['foto_encrypted'] = $fileData;

                $alunoService = new AlunoService();

                if ($alunoService->cadastrar($form)) {
                    $data['message'] = "Cadastro realizado com sucesso!";
                } else {
                    $data['message'] = "Falha ao realizar cadastro!";
                }
            } else {
                $data['message'] = "Falha ao realizar cadastro! As informações necessárias não foram preenchidas!";
            }
        }

        $cursoService = new CursoService();

        $data['cursos'] = $cursoService->listar();

        return view('pages.aluno.form', $data);
    }

    public function editar($id, Request $request)
    {
        $data = [];

        if ($request->isMethod('post')) {
            $form = $request->all();

            $validator = Validator::make($form, [
                'nome' => 'required',
                'matricula' => 'required',
                'situacao' => 'required',
                'cep' => 'required',
                'logradouro' => 'required',
                'numero' => 'required',
                'complemento' => 'required',
                'bairro' => 'required',
                'cidade' => 'required',
                'curso' => 'required',
                'turma' => 'required',
                'data_matricula' => 'required'
            ]);

            if (!$validator->fails()) {
                $file = $request->file('foto');
                if ($file != null) {
                    $format = $file->getMimeType();
                    $fileData = encrypt($file->get());

                    $form['foto_formato'] = $format;
                    $form['foto_encrypted'] = $fileData;
                } else {
                    $form['foto_encrypted'] = null;
                }

                $alunoService = new AlunoService();

                if ($alunoService->editar($id, $form)) {
                    $data['message'] = "Atualização realizada com sucesso!";
                } else {
                    $data['message'] = "Falha ao atualizar cadastro!";
                }
            } else {
                $data['message'] = "Falha ao atualizar cadastro! As informações necessárias não foram preenchidas!";
            }
        }

        $alunoService = new AlunoService();
        $data['aluno'] = $alunoService->buscar($id);

        $cursoService = new CursoService();
        $data['cursos'] = $cursoService->listar();

        return view('pages.aluno.form', $data);
    }
}
