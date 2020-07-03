<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaCursosImportacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_importacao', function (Blueprint $table) {
            $table->increments('id');
            $table->text('curso');
            $table->text('matricula');
            $table->unsignedInteger('situacao');
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos_importacao', function (Blueprint $table) {
            $table->drop();
        });
    }
}
