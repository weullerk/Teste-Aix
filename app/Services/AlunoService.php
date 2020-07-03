<?php


namespace App\Services;


use App\Model\Aluno;
use Carbon\Carbon;

class alunoService
{
    public function cadastrar($data)
    {
        $aluno = new Aluno();

        $aluno->nome = $data['nome'];
        $aluno->matricula = $data['matricula'];
        $aluno->situacao = $data['situacao'];
        $aluno->cep = $data['cep'];
        $aluno->logradouro = $data['logradouro'];
        $aluno->numero = $data['numero'];
        $aluno->complemento = $data['complemento'];
        $aluno->bairro = $data['bairro'];
        $aluno->cidade = $data['cidade'];
        $aluno->curso_id = $data['curso'];
        $aluno->turma = $data['turma'];
        $aluno->data_matricula = $data['data_matricula'];
        $aluno->foto = $data['foto'];
        $aluno->foto_formato = $data['foto_formato'];

        return $aluno->save();
    }

    public function buscar($id)
    {
        $aluno = Aluno::where('id', $id)->first();

        return $aluno;
    }

    public function editar($id, $data) {
        $aluno = Aluno::find($id);

        $aluno->nome = $data['nome'];
        $aluno->matricula = $data['matricula'];
        $aluno->situacao = $data['situacao'];
        $aluno->cep = $data['cep'];
        $aluno->logradouro = $data['logradouro'];
        $aluno->numero = $data['numero'];
        $aluno->complemento = $data['complemento'];
        $aluno->bairro = $data['bairro'];
        $aluno->cidade = $data['cidade'];
        $aluno->curso_id = $data['curso'];
        $aluno->turma = $data['turma'];
        $aluno->data_matricula = $data['data_matricula'];

        if ($data['foto_encrypted'] != null) {
            $aluno->foto = $data['foto_encrypted'];
            $aluno->foto_formato = $data['foto_formato'];
        }

        return $aluno->save();
    }

    public function listar() {
        return Aluno::all();
    }
}
