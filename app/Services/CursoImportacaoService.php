<?php


namespace App\Services;


use App\Model\Curso;
use App\Model\CursoImportacao;

class CursoImportacaoService
{
    public function verificar($curso)
    {
       $cursoTemporario = CursoImportacao::where('matricula', (string) $curso->codigo)->where('curso', (string) $curso->nome)->first();

       if ($cursoTemporario == null) {
           return true;
       }

       return false;
    }

    public function cadastrar($curso) {
        $cursoTemporario = new CursoImportacao();

        $cursoTemporario->curso = (string) $curso->nome;
        $cursoTemporario->matricula = (string) $curso->codigo;
        $cursoTemporario->situacao = 1;

        return $cursoTemporario->save();
    }

    public function limpar() {
        CursoImportacao::query()->delete();
    }

    public function listar() {
        return CursoImportacao::where('situacao', 1)->get();
    }

    public function atualizar($cursosId) {
        $cursos = CursoImportacao::all();

        foreach($cursos as $curso) {
            if (!in_array($curso->id, $cursosId)) {
                $curso->situacao = 2;
                $curso->save();
            }
        }
    }

}
