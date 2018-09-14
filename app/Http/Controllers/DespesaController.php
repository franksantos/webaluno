<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Despesa;
class DespesaController extends Controller
{
    //
    public function create(){
        return view('despesa.create', ['test'=>0]);
    }
    public function store(Request $request, Despesa $d){
      $dta = explode("/", $request->vencimento);
      $dia = $dta[0];
      $mes = $dta[1];
      $ano = $dta[2];
      $data_vencimento = Carbon::create($ano, $mes, $dia);
      /* data de vencimento */
      $dta2 = explode("/", $request->data_pagamento);
      $diaVenc = $dta2[0];
      $mesVenc = $dta2[1];
      $anoVenc = $dta2[2];
      $data_pagamento = Carbon::create($anoVenc, $mesVenc, $diaVenc);

      $d->descricao = $request->descricao;
      $d->vencimento = $data_vencimento;
      $d->tipo_pagamento = $request->ipo_pagamento;
      $d->situacao = $request->situacao;
      $d->valor = $request->valor;
      $d->data_pagamento = $data_pagamento;
      $d->obs = $request->obs;
      $d->save();
        return view('despesa.create', ['test'=>1]);
    }
}
