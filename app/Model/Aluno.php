<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function curso()
    {
        return $this->hasOne('App\Model\Curso', 'id', 'curso_id');
    }
}
