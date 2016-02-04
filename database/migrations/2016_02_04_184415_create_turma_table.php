<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma', function (Blueprint $table) {
            $table->increments('tur_id');
            $table->integer('tur_cur_id')->unsigned();
            $table->string('tur_nome', 255);
            $table->date('tur_data_inicio');
            $table->timestamps();
        });
        Schema::table('turma', function(Blueprint $table){
            $table->foreign('tur_cur_id')->references('cur_id')->on('curso')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('turma');
    }
}
