<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensalidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensalidade', function (Blueprint $table) {
            $table->increments('mes_id');
            $table->integer('mes_alu_id')->unsigned();
            $table->integer('mes_num');//número da parcela, refere-se à parcela devida pelo aluno
            $table->decimal('mes_valor', 10, 2);
            $table->date('mes_data_venc');
            $table->string('mes_status');
            $table->timestamps();
        });
        Schema::table('mensalidade', function(Blueprint $table){
            $table->foreign('mes_alu_id')->references('alu_id')->on('aluno')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mensalidade');
    }
}
