@extends('layouts.app')

@section('content')
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



    <div class="container">
        <h4>Parcelas do aluno: {{ $alunos->alu_nome }}</h4>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $mensalidade->mes_num }}</td>
                    <td>{{ $mensalidade->mes_valor }}</td>
                    <td>{{ $mensalidade->mes_data_venc->format('d/m/Y') }}</td>
                    <td>
                        @if($mensalidade->mes_status == 'Pago')
                            <p class="text-success"><strong>{!! $mensalidade->mes_status !!}</strong></p>
                        @else
                            <p class="text-danger"><strong>{!! $mensalidade->mes_status !!}</strong></p>
                        @endif
                        {{-- $mensalidade->mes_status --}}
                    </td>
                    <td style="text-align: center">
                        @if($mensalidade->mes_status == 'Pago')
                            &nbsp;
                        @else
                            <a href="{{ route('pagamentos.cadcomprovante',['idMensalidade'=>$mensalidade->id, 'idAluno'=>$alunos->id]) }}" class="btn-sm btn-success">Confirmar Pagamento</a>
                        @endif

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop

@push('scripts')
<script>
    /*$(function() {
        $('#tabela-alunos').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.aluno') !!}',
            columns: [
                { data: 'alu_nome', name: 'alu_nome' },
                { data: 'alu_cpf', name: 'alu_cpf' },
                { data: 'alu_tel', name: 'alu_tel' }
            ]
            /*
             *
             * aluno.alu_nome
             { data: 'alu_nome', name: 'alu_nome' },
             { data: 'alu_cpf', name: 'alu_cpf' },
             { data: 'alu_tel', name: 'alu_tel' }
             * */
        /*});
    });*/
</script>
@endpush