<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    //
    public $table = "pagamento";
    protected $dates = ['pag_data','pag_data_venc'];
    protected $fillable = ['pag_mes_id','pag_data','pag_hora','pag_lote','pag_terminal','pag_cod_barras','pag_data_venc','pag_valor'];

}
