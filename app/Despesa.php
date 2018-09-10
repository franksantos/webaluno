<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    //
    /** situacao indica a situação da despesa se está     */
    /** 0 = Em Aberto     */
    /** 1 = Paga     */
    /** 2 = Atrasada     */
    /** tipo_pagamento indica o tipo de pagamento da despesa    */
    /** 0 = Dinheiro     */
    /** 1 = Cartão     */
    /** 2 = Paypal     */
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
