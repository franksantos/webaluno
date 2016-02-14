<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    public $table = "aluno";
    protected $primaryKey = "alu_id";
    protected $fillable = ['alu_tur_id', 'alu_nome', 'alu_cpf', 'alu_tel'];
}
