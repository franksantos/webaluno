<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    public $table = "curso";
    protected $primaryKey = 'cur_id';
    protected $fillable = ['cur_pol_id','cur_nome', 'cur_area'];
}
