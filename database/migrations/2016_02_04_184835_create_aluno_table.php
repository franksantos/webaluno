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
            $table->increments('alu_id');
            $table->integer('alu_fic_id')->unsigned();
            $table->integer('alu_tur_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('aluno', function(Blueprint $table){
            $table->foreign('alu_fic_id')->references('fic_id')->on('ficha')->onDelete('cascade');
            $table->foreign('alu_tur_id')->references('tur_id')->on('turma')->onDelete('cascade');
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
