<?php

use Illuminate\Database\Seeder;

class PoloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('polo')->insert(['pol_nome'=>'IMPERATRIZ']);
        DB::table('polo')->insert(['pol_nome'=>'GRAJAU']);

    }
}
