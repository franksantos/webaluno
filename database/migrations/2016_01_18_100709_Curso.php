<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Curso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('curso', function(Blueprint $table){
            $table->increments('cur_id');
            $table->integer('cur_pol_id')->unsigned();
            $table->foreign('cur_pol_id')->references('pol_id')->on('polo')->onDelete('cascade');
            $table->string('cur_nome', 255);
            $table->string('cur_area', 255);
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
        Schema::drop('curso');
    }
}
