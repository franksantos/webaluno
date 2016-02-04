<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('aluno', function(Blueprint $table){
           $table->increments('alu_id');
            $table->integer('alu_fic_id')->unsigned();
            $table->foreign('alu_fic_id')->references('fic_id')->on('ficha')->onDelete('cascade');
            $table->integer('alu_tur_id')->unsigned();
            $table->foreign('alu_tur_id')->references('tur_id')->on('turma')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('aluno');
    }
}
