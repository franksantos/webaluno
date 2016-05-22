<?php

/**
 * Created by PhpStorm.
 * User: frank
 * Date: 17/05/2016
 * Time: 12:18
 */
use \Illuminate\Database\Seeder;
use App\Turma;
class TurmaTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Implement run() method.
        Turma::truncate();
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>5,'tur_nome'=>'ADMINISTRAÇÃO LAJEADO-MA','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>4,'cur_pol_id'=>1,'tur_nome'=>'COMPLEMENTAÇÃO E','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>4,'cur_pol_id'=>1,'tur_nome'=>'COMPLEMENTAÇÃO F','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>1,'cur_pol_id'=>1,'tur_nome'=>'PÓS-GRADUAÇÃO H','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>3,'tur_nome'=>'PEDAGOGIA COCOS','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>1,'tur_nome'=>'SERVIÇO SOCIAL B','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>1,'tur_nome'=>'SERVIÇO SOCIAL A','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>4,'tur_nome'=>'PEDAGOGIA PASSAG.','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>1,'tur_nome'=>'PEDAGOGIA H','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>1,'cur_pol_id'=>1,'tur_nome'=>'PÓS-GRADUAÇÃO I','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>2,'tur_nome'=>'EDUCAÇÃO GRAJAÚ-MA','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>2,'tur_nome'=>'PEDAGOGIA GRAJAÚ A','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>2,'tur_nome'=>'PEDAGOGIA GRAJAÚ B','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>2,'tur_nome'=>'PEDAGOGIA GRAJAÚ C','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>2,'tur_nome'=>'SERVIÇO SOCIAL GRAJAÚ','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>1,'cur_pol_id'=>1,'tur_nome'=>'PÓS-GRADUAÇÃO A 2016','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>6,'tur_nome'=>'PEDAGOGIA SÍTIO NOVO','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>1,'tur_nome'=>'PEDAGOGIA I','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>1,'cur_pol_id'=>1,'tur_nome'=>'PÓS-GRADUAÇÃO B 2015','tur_data_inicio'=>'2015-07-03']);
        Turma::create(['tur_cur_id'=>3,'cur_pol_id'=>1,'tur_nome'=>'ENSINO MÉDIO','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>5,'cur_pol_id'=>1,'tur_nome'=>'INDEPENDENTE','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>1,'tur_nome'=>'PEDAGOGIA A 2015','tur_data_inicio'=>'2015-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>7,'tur_nome'=>'PEDAGOGIA BREJÃO','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>2,'cur_pol_id'=>5,'tur_nome'=>'PEDAGOGIA LAJEADO','tur_data_inicio'=>'2014-01-03']);
        Turma::create(['tur_cur_id'=>1,'cur_pol_id'=>1,'tur_nome'=>'PÓS-GRADUAÇÃO A 2015','tur_data_inicio'=>'2015-01-03']);
        Turma::create(['tur_cur_id'=>1,'cur_pol_id'=>3,'tur_nome'=>'PÓS-GRADUAÇÃO COCOS','tur_data_inicio'=>'2015-01-03']);

    }
}