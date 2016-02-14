@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($aluno as $chave)
        <h4>Parcelas do aluno: {{ $chave->alu_nome }}</h4>
    @endforeach

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Parcela</th>
            <th>Valor</th>
            <th>Data de Vencimento</th>
            <th>Status</th>
            <th colspan="2" style="text-align: center">A&ccedil;&otilde;es</th>
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
                    <a href="{{ route('mensalidades.edit',['id'=>$mensalidade->mes_id]) }}" class="btn-sm btn-success">Editar</a>

                </td>
                <td style="text-align: center">
                    <a href="{{ route('mensalidades.destroy',['id'=>$mensalidade->mes_id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
