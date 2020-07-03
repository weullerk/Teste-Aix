<?php


namespace App\Services;


use App\Model\Curso;

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
}
