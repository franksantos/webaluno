@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- aqui entrara a tela de detalhes do pagamento -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Numero da Parcela') !!}
                    {!! Form::text('num_parcela', $pagamento->mes_num, ['disabled'=>'disabled','id'=>'num_parcela', 'class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Data do Pagamento ( informada no comprovante )') !!}
                    {!! Form::text('data_pagto', $pagamento->pag_data->format('d/m/Y'), ['disabled'=>'disabled','id'=>'data_pagto', 'class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Hora do Pagamento ( informada no comprovante )') !!}
                    {!! Form::text('hora_pagto', $pagamento->pag_hora, ['disabled'=>'disabled','id'=>'hora_pagto', 'class'=>'form-control timepicker']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('C&oacute;digo de Barras do Pagamento ( informado no comprovante )') !!}
                    {!! Form::text('cod_barras_pagto', $pagamento->pag_cod_barras, ['disabled'=>'disabled','id'=>'cod_barras_pagto', 'class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Aluno') !!}
                    {!! Form::text('terminal_pagto', $pagamento->alu_nome, ['disabled'=>'disabled','id'=>'terminal_pagto', 'class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Turma') !!}
                    {!! Form::text('cod_barras_pagto', $pagamento->tur_nome, ['disabled'=>'disabled','id'=>'cod_barras_pagto', 'class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Data de Vencimento da Parcela') !!}
                    {!! Form::text('data_venc', $pagamento->pag_data_venc->format('d/m/Y'), ['disabled'=>'disabled','id'=>'data_venc', 'class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Valor Pago') !!}
                    {!! Form::text('valor_parcela', $pagamento->pag_valor, ['disabled'=>'disabled','id'=>'valor_parcela','class' => 'form-control']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="javascript:history.go(-2)" class="btn btn-success">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection