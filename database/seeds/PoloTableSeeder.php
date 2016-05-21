<?php

use Illuminate\Database\Seeder;
use App\User as User;// para usar o Eloquent Model

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
        Polo::truncate();
        //adciono as linhas
        Polo::create(['pol_nome'      =>'IMPERATRIZ-MA']);//id=1
        Polo::create(['pol_nome'          =>'GRAJAU-MA']);//id=2
        Polo::create(['pol_nome'           =>'COCOS-MA']);//id=3
        Polo::create(['pol_nome'    =>'PASSAGEM BOA-MA']);//id=4
        Polo::create(['pol_nome'         =>'LAJEADO-MA']);//id=5
        Polo::create(['pol_nome'      =>'SITIO NOVO-MA']);//id=6
        Polo::create(['pol_nome'          =>'BREJÃO-MA']);//id=7
    }
}
