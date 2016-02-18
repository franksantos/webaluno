<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alu_tur_id')->unsigned();
            $table->string('alu_nome', 255);
            $table->string('alu_cpf', 11)->unique(); //cpf [e unico
            $table->string('alu_tel', 16);
            $table->timestamps();
        });
        Schema::table('aluno', function(Blueprint $table){
            $table->foreign('alu_tur_id')->references('id')->on('turma')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aluno');
    }
}
