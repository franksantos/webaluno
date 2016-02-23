@extends('layouts.app')

@section('content')

        <!-- inicio contedudo lista de alunos e suas mensalidade -->
<div class="container">
    <div class="box box-header">
        <h3 class="box-title">Cadastro de Confirma&ccedil;&atilde;o de Pagamento</h3>
    </div>
    {!! Form::open(array('url' => 'pagamento/lista/mensalidades')) !!}
    <div class="form-group-lg">
        <h4> Selecione um aluno para exibir suas parcelas</h4>
        <div class="form-group">
            <div class="col-sm-8">
                <select name="alunoNome" id="alunoNome" class="form-control">

                </select>
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Exibir Parcelas do Aluno', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}

</div>
{{$flag['acao']}}
@if($flag['acao'] === 'listar')
    <div class="container">
        @foreach($alunos as $chave)
            <h4>Parcelas do aluno: {{ $chave->alu_nome }}</h4>
        @endforeach
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Parcela</th>
                <th>Valor</th>
                <th>Data de Vencimento</th>
                <th>Status</th>
                <th style="text-align: center">A&ccedil;&otilde;es</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mensalidades as $mensalidade)
                <tr>
                    <td>{{ $mensalidade->mes_num }}</td>
                    <td>{{ $mensalidade->mes_valor }}</td>
                    <td>{{ $mensalidade->mes_data_venc }}</td>
                    <td>{{ $mensalidade->mes_status }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('mensalidades.edit',['id'=>$mensalidade->id]) }}" class="btn-sm btn-success">Confirmar Pagamento</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endif




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

        $('#alunoNome').select2({
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
    <script>
        var valor = "";
        $( "#alunoNome" ).change(function () {
            var str = "";
            $( "#alunoNome option:selected" ).each(function() {
                //str += $( this ).text() + " ";
                str += $( this ).val();
            });
            if(str==""){

            }else{
                console.log(str);
                valor = str;
                console.log(valor);
            }
        }).change();
        $('#paramNomeAluno').click(function(){
            alert(valor);
        });
    </script>
@endsection