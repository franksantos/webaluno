@extends('layouts.app')

@section('content')

@if($test==1)
        <!-- div para exibir A RESPOSTA da requisição AJAX-->
<!-- Modal Mensagem SUCESSO AJAX  -->
<!-- inicio -->
<div class="modal fade" id="sucessoAjax" tabindex="-1" role="dialog" aria-     labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">SALVO COM SUCESSO</h4>
            </div>
            <div class="modal-body">
                <p id="retorno">

                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM Mensagem de SUCESSO-->
@endif


<div class="container">
    <div class="box box-header">
        <h3 class="box-title">Cadastro de Parcela</h3>
    </div>

    {!! Form::open(array('url' => 'pagamento/store')) !!}
    {!! Form::hidden('status','Pago') !!}
    <div class="form-group">
        {!! Form::label('Turma') !!}
        <select name="turma" id="turma" class="form-control">

        </select>
    </div>
    <div class="form-group">
        {!! Form::label('Aluno') !!}
        <select name="aluno" id="aluno" class="form-control">

        </select>
    </div>
    <div class="form-group">
        {!! Form::label('Parcela') !!}
        <select name="aluno" id="aluno" class="form-control">

        </select>
    </div>
    <div class="form-group">
        {!! Form::label('Valor de cada Parcela') !!}
        {!! Form::text('valor', null, ['id'=>'valor','data-thousands'=>'.','data-decimal'=>',','data-prefix'=>'R$ ','class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Data do Primeiro Vencimento') !!}
        {!! Form::text('dt_venc', null, ['id'=>'dt_venc','class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                {!! Form::label('Quantidade de parcelas') !!}
                {!! Form::select('num_parcelas', [''=>'-',
                    '1'=>'1',
                    '2'=>'2',
                    '3'=>'3',
                    '4'=>'4',
                    '5'=>'5',
                    '6'=>'6',
                    '7'=>'7',
                    '8'=>'8',
                    '9'=>'9',
                    '10'=>'10',
                    '11'=>'11',
                    '12'=>'12',
                    '13'=>'13',
                    '14'=>'14',
                    '15'=>'15',
                    '16'=>'16',
                    '17'=>'17',
                    '18'=>'18',
                    '19'=>'19',
                    '20'=>'20',
                    '21'=>'21',
                    '22'=>'22',
                    '23'=>'23',
                    '24'=>'24',
                     ''],'', ['id'=>'num_parcelas','class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit('Salvar Pagamento', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}


@endsection
    @section('scripts')
        <script>
            $("#valor").maskMoney();
            //<!-- Exibir data em um datepicker -->
            $('#dt_venc').datepicker({
                format:'dd/mm/yyyy',
                language: 'pt-BR',
                autoclose: true,
                todayHighlight: true
            });
        </script>
        <script>
            $('#turma').select2({
                placeholder: 'Buscar por nome',
                ajax: {
                    dataType: 'json',
                    url: '{{ url("turma/api") }}',
                    delay: 400,
                    data: function(params) {
                        return {
                            term: params.term
                        }
                    },
                    processResults: function (data, page) {
                        return {
                            results: data
                        };
                    },
                },

            });

            $('#aluno').select2({
                placeholder: 'Buscar por nome',
                ajax: {
                    dataType: 'json',
                    url: '{{ url("aluno/api") }}',
                    delay: 400,
                    data: function(params) {
                        return {
                            term: params.term
                        }
                    },
                    processResults: function (data, page) {
                        return {
                            results: data
                        };
                    },
                },

            });
        </script>
@endsection