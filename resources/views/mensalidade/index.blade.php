@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($aluno as $chave)
        <h1>Parcelas do aluno: {{ $chave->alu_nome }}</h1>
        <a href="{{url('mensalidade/create')}}" class="btn btn-success">Voltar</a>
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
                <td>{{ $mensalidade->mes_data_venc->format('d/m/Y') }}</td>
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
@section('scripts')

@endsection
