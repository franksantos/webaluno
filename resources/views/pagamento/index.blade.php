@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($dados as $chave)
        @endforeach

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome do Aluno</th>
                <th>Turma</th>
                <th>Pagar</th>
                <th>Valor</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dados as $chave)
                <tr>
                    <td>{{ $chave->alu_nome }}</td>
                    <td>{{ $chave->tur_nome }}</td>
                    <td>{{ $chave->mes_valor }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('pagamentos.edit',['id'=>$chave->alu_id]) }}" class="btn-sm btn-success">Efetuar Pagamento</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
