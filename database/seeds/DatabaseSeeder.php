<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UsersTableSeeder::class);
        $this->call(CursoTableSeeder::class);
        $this->call(PoloTableSeeder::class);
        $this->call(TurmaTableSeeder::class);
        $this->call(AlunoTableSeeder::class);
        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
