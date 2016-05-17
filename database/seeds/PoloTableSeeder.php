<?php

use Illuminate\Database\Seeder;
use App\Polo as Polo;// para usar o Eloquent Model

class PoloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //limpa a tabela
        //Polo::truncate();
        //adciono as linhas
        Polo::create(['pol_nome'=>'IMPERATRIZ-MA']);
        Polo::create(['pol_nome'=>'GRAJAU-MA']);
        Polo::create(['pol_nome'=>'COCOS-MA']);
        Polo::create(['pol_nome'=>'PASSAGEM BOA-MA']);
        Polo::create(['pol_nome'=>'LAJEADO-MA']);
        Polo::create(['pol_nome'=>'SITIO NOVO-MA']);
        /*
        DB::table('polo')->insert(['pol_nome'=>'IMPERATRIZ']);
        DB::table('polo')->insert(['pol_nome'=>'GRAJAU']);
        */

    }
}
