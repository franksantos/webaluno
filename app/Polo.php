<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polo extends Model
{
    //
    protected $fillable = ['pol_nome'];
    public $table = "polo";

    public function curso(){
        return $this->hasMany('App\Curso');
    }
}
