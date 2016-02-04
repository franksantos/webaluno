<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mensalidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mensalidade', function(Blueprint $table){
            $table->increments('men_id');
            $table->integer('men_alu_id')->unsigned();
            $table->foreign('men_alu_id')->references('alu_id')->on('aluno')->onDelete('cascade');
            $table->integer('men_num');//número da parcela, refere-se à parcela devida pelo aluno
            $table->decimal('men_valor', 10, 2);
            $table->date('mes_data_venc');
            $table->string('mes_status');
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
        Schema::drop('mensalidade');
    }
}
