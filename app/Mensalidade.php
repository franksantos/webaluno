<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensalidade extends Model
{
    //
    public $table = 'mensalidade';
    protected $primaryKey = 'mes_id';
    protected $fillable = ['mes_alu_id','mes_num','mes_valor','mes_data_venc','mes_status'];

    
}
