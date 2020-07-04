<?php


namespace App\Http\Controllers;


use App\Services\CursoImportacaoService;
use App\Services\CursoService;
use Illuminate\Http\Request;

class ImportarCursoController extends Controller
{
    public function index(Request $request)
    {
        $data = [];

        if ($request->isMethod('post')) {
            $form = $request->all();

            $file = $request->file('arquivo');
            if ($file != null) {
                $xml = simplexml_load_file($file->path());

                $cursoImportacao = new CursoImportacaoService();
                $cursoImportacao->limpar();

                foreach($xml as $curso) {
                    if ($cursoImportacao->verificar($curso)) {
                        $cursoImportacao->cadastrar($curso);
                    }
                }

                if (!isset($form['analisar'])) {
                    $curso = new CursoService();
                    $importacoes = $curso->importar();
                    if ($importacoes > 0) {
                        $data['message'] = $importacoes . " novos cursos importados com sucesso!";
                    } else {
                        $data['message'] = "Falha ao realizar importação! Todos os cursos no arquivo já existem.";
                    }
                } else {
                    return redirect('importar-cursos/analise');
                }

            } else {
                $data['message'] = "Arquivo não fornececido!";
            }
        }

        return view('pages.importar_curso.index', $data);
    }

    public function analise(Request $request)
    {
        $data = [];

        $cursoImportacao = new CursoImportacaoService();

        if ($request->isMethod('post')) {
            $form = $request->all();

            $cursoImportacao->atualizar($form['analisar']);

            $curso = new CursoService();
            $importacoes = $curso->importar();
            if ($importacoes > 0) {
                $cursoImportacao->limpar();
                $data['message'] = $importacoes . " novos cursos importados com sucesso!";
            } else {
                $data['message'] = "Falha ao realizar importação! Todos os cursos no arquivo já existem.";
            }

        }

        $data['cursos_temporarios'] = $cursoImportacao->listar();

        return view('pages.importar_curso.analise', $data);
    }
}
