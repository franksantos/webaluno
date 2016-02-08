<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    public $table = "turma";
    protected $primaryKey = 'tur_id';
    protected $fillable = ['tur_cur_id','tur_nome', 'tur_data_inicio'];
}
