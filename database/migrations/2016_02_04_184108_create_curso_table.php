<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cur_pol_id')->unsigned();
            $table->string('cur_nome', 255);
            $table->string('cur_area', 255);
            $table->timestamps();
        });
        Schema::table('curso', function (Blueprint $table) {
            $table->foreign('cur_pol_id')->references('id')->on('polo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('curso');
    }
}
