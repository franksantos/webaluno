<?php

use Illuminate\Database\Seeder;
use App\User as User;// para usar o Eloquent Model

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //limpa a tabela
        User::truncate();
        //adciono o usuário frank
        User::create([
            'name'=>'frank',
            'email'=>'frank_81santos@hotmail.com',
            'password'=>Hash::make('bandite')
        ]);
        //adciono o usuário selma
        User::create([
            'name'=>'Selma Barros',
            'email'=>'selma.barros8080@hotmail.com',
            'password'=>Hash::make('123456')
        ]);
        //adciono o usuário frank
        User::create([
            'name'=>'Marcilene',
            'email'=>'iespima@iespima.com.br',
            'password'=>Hash::make('123456')
        ]);
        //adciono o usuário frank
        User::create([
            'name'=>'Suelen',
            'email'=>'frank@viasistemasweb.com.br',
            'password'=>Hash::make('123456')
        ]);

    }
}
