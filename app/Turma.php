<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    public $table = "turma";
    protected $primaryKey = 'tur_id';
    protected $fillable = ['tur_cur_id','tur_nome', 'tur_data_inicio'];

    /**
     * Relaciona turma com alunos
     *  uma turma tem varios alunos
     * belongsTo(Aluno)
     * retorna
     */
    public function alunos(){
        return $this->hasMany('\App\Aluno');
    }
}
