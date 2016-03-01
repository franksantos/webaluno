@extends('layouts.app')

@section('content')

        <!-- inicio contedudo lista de alunos e suas mensalidade -->
<div class="container">
    <div class="box box-header">
        <h3 class="box-title">Confirma&ccedil;&atilde;o de Pagamento</h3>
    </div>
</div>
@if($flag['acao'] == 'listar')
    <div class="container">
        @foreach($alunos as $chave)
            <h4>Parcelas do aluno: <span class="label label-success">{{ $chave->alu_nome }}</span></h4>
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
                    <td>{{ $mensalidade->mes_data_venc->format('d/m/Y') }}</td>
                    <td>
                        @if($mensalidade->mes_status == 'Pago')
                            <p class="text-success"><strong>{!! $mensalidade->mes_status !!}</strong></p>
                        @else
                            <p class="text-danger"><strong>{!! $mensalidade->mes_status !!}</strong></p>
                        @endif
                    </td>
                    <td style="text-align: center">
                        <a href="{{ route('mensalidades.edit',['id'=>$mensalidade->id]) }}" class="btn-sm btn-success">Ver Detalhes do Pagto</a>
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

@endsection