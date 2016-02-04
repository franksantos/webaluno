<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pagamento', function(Blueprint $table){
            $table->increments('pag_id');
            $table->integer('pag_mes_id')->unsigned();
            $table->foreign('pag_mes_id')->references('mes_id')->on('mensalidade')->onDelete('cascade');
            $table->date('pag_data');
            $table->time('pag_hora');
            $table->string('pag_lote', 15);
            $table->string('pag_terminal', 45);
            $table->string('pag_cod_barras', 155);
            $table->date('pag_data_venc');
            $table->decimal('pag_valor', 10, 2);
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
        Schema::drop('pagamento');
    }
}
