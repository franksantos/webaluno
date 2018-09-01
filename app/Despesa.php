<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    //
    protected $fillable = [
      'descricao',
      'vencimento',
      'tipo_pagamento',
      'situacao',
      'valor',
      'data_pagamento',
      'obs'
    ];

    protected $dates = [
      'vencimento',
      'data_pagamento'
    ];
}
