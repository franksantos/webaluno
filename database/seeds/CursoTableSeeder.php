<?php

/**
 * Created by PhpStorm.
 * User: frank
 * Date: 17/05/2016
 * Time: 12:18
 */
use \Illuminate\Database\Seeder;
use App\Curso;
class CursoTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Implement run() method.
        //Curso::truncate();
        Curso::create(['cur_nome'=>'Pós-Graduação', 'cur_area'=>'Geral']);
        Curso::create(['cur_nome'=>'Curso Livre', 'cur_area'=>'Geral']);
        Curso::create(['cur_nome'=>'Ensino Médio', 'cur_area'=>'Geral']);
        Curso::create(['cur_nome'=>'Complementação', 'cur_area'=>'Geral']);
        Curso::create(['cur_nome'=>'Independente', 'cur_area'=>'Geral']);
    }
}