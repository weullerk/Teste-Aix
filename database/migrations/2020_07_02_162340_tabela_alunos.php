<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nome');
            $table->text('matricula');
            $table->unsignedInteger('situacao');
            $table->text('cep');
            $table->text('logradouro');
            $table->text('numero');
            $table->text('complemento');
            $table->text('bairro');
            $table->text('cidade');
            $table->unsignedInteger('curso_id');
            $table->text('turma');
            $table->date('data_matricula');
            $table->longText('foto');
            $table->longText('foto_formato');
            $table->timestamps(0);

            $table->foreign('curso_id')
                ->references('id')
                ->on('cursos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->drop();
        });
    }
}
