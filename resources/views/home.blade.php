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
                            <img src="{!! asset('bower_components/AdminLTE/dist/img/classroom_icone.png') !!}" style="border:1px solid #cccccc" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Turmas</h4>
                            <span class="text-muted">Listagem de turmas</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Busca Pagamento</h4>
                            <span class="text-muted">Historico de pagamentos</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
