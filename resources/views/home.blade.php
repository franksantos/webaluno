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
                                <h4>Alunos</h4>
                                <span class="text-muted">Gest&atilde;o de Alunos</span>
                            </a>
                        </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                        <a href="{{url('mensalidade/create')}}">
                            <img src="{!! asset('bower_components/AdminLTE/dist/img/carne_pagamento.png') !!}" style="border:1px solid #cccccc; width: 200px; height: 200px;" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Parcelas</h4>
                            <span class="text-muted">Criar Parcelas para um Aluno</span>
                        </a>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <a href="{{url('turma/create')}}">
                                <img src="{!! asset('bower_components/AdminLTE/dist/img/classroom_icone.png') !!}" style="border:1px solid #cccccc;" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Turmas</h4>
                                <span class="text-muted">Gest&atilde;o de Turmas</span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            {{-- Painel com relatórios de valores recebidos  --}}
            {{-- INÍCIO  --}}
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3>Total Geral: R$ {{$totalGeral}}</h3>
              </div>
              <div class="panel-body">
                  <div class="row placeholders" style="text-align: center">
                      <div class="col-xs-6 col-sm-3 placeholder">
                            <h4>Utilipeças: R$ {{$totalUtilipecas}} | Qtd Pagas: {{$qtdPagasUtilipecas}}</h4>
                      </div>
                      <div class="col-xs-6 col-sm-3 placeholder">
                        <h4>Carrão Acessórios: R$ {{$totalCarraoAcessorios}} | Qtd Pagas: {{$qtdPagasCarrao}}</h4>
                      </div>
                      <div class="col-xs-6 col-sm-3 placeholder">
                        <h4>Ipesa: R$ {{$totalIpesa}} | Qtd Pagas: {{$qtdPagasIpesa}}</h4>
                      </div>
                      <div class="col-xs-6 col-sm-3 placeholder">
                        <h4>Wnuclear: R$ {{$totalWnuclear}} | Qtd Pagas: {{$qtdPagasWnuclear}}</h4>
                      </div>

                  </div>

              </div>
            </div>
            {{-- FIM  --}}
        </div>
    </div>
</div>
@endsection
