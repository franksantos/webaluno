<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    public $table = "aluno";
    //protected $primaryKey = "alu_id";
    protected $fillable = ['alu_tur_id', 'alu_nome', 'alu_cpf', 'alu_tel'];

    /**
     * Relaciona alunos com turma
     *  um aluno faz parte de uma turma
     * retorna a turma do aluno
     */
    public function turmas(){
        return $this->belongsTo('App\Turma', 'id');
    }

    /**
     * Relaciona alunos com mensalidade
     *  um aluno tem varias mensalidades*
     * retorna todas as mensalidades de um aluno
     */
    public function mensalidades(){
        return $this->hasMany('App\Mensalidade');
    }
}
