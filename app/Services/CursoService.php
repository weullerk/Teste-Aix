<?php


namespace App\Services;


use App\Model\Curso;
use App\Model\CursoImportacao;

class CursoService
{
    public function cadastrar($data)
    {
        $curso = new Curso();

        $curso->curso = $data['curso'];
        $curso->matricula = $data['matricula'];
        $curso->situacao = $data['situacao'];

        return $curso->save();
    }

    public function buscar($id)
    {
        $curso = Curso::where('id', $id)->first();

        return $curso;
    }

    public function editar($id, $data) {
        $curso = Curso::find($id);

        $curso->curso = $data['curso'];
        $curso->matricula = $data['matricula'];
        $curso->situacao = $data['situacao'];

        return $curso->save();
    }

    public function listar() {
        return Curso::all();
    }

    public function listarRecursivo() {
        return Curso::all()->sortDesc();
    }

    public function importar()
    {
        $importacoes = 0;

        $cursosTemporarios = CursoImportacao::where('situacao', 1)->get();

        foreach($cursosTemporarios as $cursoTemporario) {
            $curso = Curso::where([
                ['curso', '=', $cursoTemporario->curso],
                ['matricula', '=', $cursoTemporario->matricula]
            ])->first();

            if ($curso == null) {
                $novoCurso = new Curso();
                $novoCurso->curso = $cursoTemporario->curso;
                $novoCurso->matricula = $cursoTemporario->matricula;
                $novoCurso->situacao = 1;
                if ($novoCurso->save()) {
                    $importacoes += 1;
                }
            }
        }

        return $importacoes;
    }
}
