<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pag_mes_id')->unique()->unsigned();
            $table->date('pag_data');
            $table->time('pag_hora');
            $table->string('pag_lote', 15);
            $table->string('pag_terminal', 45);
            $table->string('pag_cod_barras', 155)->unique();
            $table->date('pag_data_venc');
            $table->decimal('pag_valor', 10, 2);
            $table->timestamps();
        });
        Schema::table('pagamento', function(Blueprint $table){
            $table->foreign('pag_mes_id')->references('id')->on('mensalidade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pagamento');
    }
}
