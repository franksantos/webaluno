@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row placeholders" style="text-align: center">
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <a href="{{url('pagamento/create')}}">
                                <img src="{!! asset('bower_components/AdminLTE/dist/img/comprovante_pagto_icone.png') !!}" style="border:1px solid #cccccc" width="200" height="200" class="img-responsive" alt="Comprovantes de pagamento">
                                <h4>Pagamentos</h4>
                                <span class="text-muted">Comprovantes de Pagamentos</span>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <a href="{{url('aluno/create')}}">
                                <img src="{!! asset('bower_components/AdminLTE/dist/img/alunos.png') !!}" style="border:1px solid #cccccc" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Clientes</h4>
                                <span class="text-muted">Gest&atilde;o de Clientes</span>
                            </a>
                        </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                        <a href="{{url('mensalidade/create')}}">
                            <img src="{!! asset('bower_components/AdminLTE/dist/img/carne_pagamento.png') !!}" style="border:1px solid #cccccc; width: 200px; height: 200px;" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Parcelas</h4>
                            <span class="text-muted">Criar Parcelas para um Cliente</span>
                        </a>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <a href="{{url('turma/create')}}">
                                <img src="{!! asset('bower_components/AdminLTE/dist/img/classroom_icone.png') !!}" style="border:1px solid #cccccc;" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Turmas</h4>
                                <span class="text-muted">Gest&atilde;o de Categorias</span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            {{-- Painel com relatórios de valores recebidos  --}}
            {{-- INÍCIO  --}}
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-4"><h3>Receitas: R$ {{number_format($totalGeral, 2, ',', '.')}}</h3></div>
                  <div class="col-md-4"><h3>Despesas: R$ {{number_format($totalDespesas, 2, ',', '.')}}</h3></div>
                  @php
                    $resultado = $totalGeral-$totalDespesas;
                  @endphp
                  <div class="col-md-4"><h3>Resultado: R$ {{number_format($resultado, 2, ',', '.')}}</h3></div>
                </div>
              </div>
              <div class="panel-body">
                  <div class="row placeholders" style="text-align: center">
                      <div class="col-xs-6 col-sm-3 placeholder">
                            <h4>Utilipeças: R$ {{$totalUtilipecas}}</h4>
                            <h5>Qtd Pagas: {{$qtdPagasUtilipecas}}</h5>
                      </div>
                      <div class="col-xs-6 col-sm-3 placeholder">
                        <h4>Carrão: R$ {{$totalCarraoAcessorios}} </h4>
                        <h5>Qtd Pagas: {{$qtdPagasCarrao}}</h5>
                      </div>
                      <div class="col-xs-6 col-sm-3 placeholder">
                        <h4>Ipesa: R$ {{$totalIpesa}}</h4>
                        <h5>Qtd Pagas: {{$qtdPagasIpesa}}</h5>
                      </div>
                      <div class="col-xs-6 col-sm-3 placeholder">
                        <h4>Wnuclear: R$ {{$totalWnuclear}} </h4>
                        <h5>Qtd Pagas: {{$qtdPagasWnuclear}}</h5>
                      </div>

                  </div>

              </div>
            </div>
            {{-- FIM  --}}
        </div>
    </div>
</div>
@endsection
