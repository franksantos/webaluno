@extends('layouts.app')

@section('content')

<div class="container">
    <div class="box box-header">
        <h1 class="box-title">Cadastre todos os dados do Comprovante de Pagamento Recebido</h1>
    </div>

    <!--<div class="panel panel-info">
        <div class="panel-heading">Panel Header</div>
        <div class="panel-body">Panel Content</div>
    </div>-->
    <!-- validacao de erros -->
    @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(array('url' => 'pagamento/store')) !!}
    {!! Form::hidden('idMensalidade',$mensalidade->id) !!}
    {!! Form::hidden('idAluno',$aluno->id) !!}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('Numero da Parcela') !!}
                {!! Form::text('num_parcela', $mensalidade->mes_num, ['disabled'=>'disabled','id'=>'num_parcela', 'class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Data do Pagamento ( informada no comprovante )') !!}
                {!! Form::text('data_pagto', null, ['id'=>'data_pagto', 'class'=>'form-control', 'required'=>'required']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('Hora do Pagamento ( informada no comprovante )') !!}
                {!! Form::text('hora_pagto', null, ['id'=>'hora_pagto', 'class'=>'form-control timepicker', 'required'=>'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Lote do Pagamento ( informado no comprovante )') !!}
                {!! Form::text('lote_pagto', null, ['id'=>'lote_pagto', 'class'=>'form-control', 'required'=>'required']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('Numero do Terminal usado no Pagamento ( informado no comprovante )') !!}
                {!! Form::text('terminal_pagto', null, ['id'=>'terminal_pagto', 'class'=>'form-control', 'required'=>'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('C&oacute;digo de Barras do Pagamento ( informado no comprovante )') !!}
                {!! Form::text('cod_barras_pagto', null, ['id'=>'cod_barras_pagto', 'class'=>'form-control', 'required'=>'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Data de Vencimento da Parcela') !!}
                {!! Form::text('data_venc', $mensalidade->mes_data_venc->format('d/m/Y'), ['readonly'=>'readonly','id'=>'data_venc', 'class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Valor Pago') !!}
                {!! Form::text('valor_parcela', $mensalidade->mes_valor, ['id'=>'valor_parcela','readonly'=>'readonly','class' => 'form-control']) !!}
            </div>
        </div>
    </div>


    <div class="form-group">
        {!! Form::submit('Confirmar Pagamento', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
</div>

    @endsection
    @section('scripts')
        <script>
            $(document).ready(function(){
                //datepicker da data de pagamento
                $('#data_pagto').datepicker({
                    format:'dd/mm/yyyy',
                    language: 'pt-BR',
                    autoclose: true,
                    todayHighlight: true
                });
                //máscara para o telefone
                $('#hora_pagto').inputmask("99:99:99", {"placeholder": "__:__:__"});

                /** validate */
                $("form").validate({
                    debug: false,
                    rules:{
                        data_pagto:{required:true}
                    },
                    messages:{
                        data_pagto:{
                            required:"Esse campo n&atilde;o pode ser vazio"
                        }
                    },
                    submitHandler: function(form){
                        return true;
                    }
                });
            });

        </script>
    @endsection