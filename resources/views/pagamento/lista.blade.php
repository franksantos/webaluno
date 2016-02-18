@extends('layouts.app')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Parcela</th>
            <th>Valor</th>
            <th>Status</th>
            <th>Turma</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'alu_nome', name: 'aluno.alu_nome' },
                { data: 'mes_num', name: 'mensalidade.mes_num' },
                { data: 'mes_valor', name: 'mensalidade.mes_valor' },
                { data: 'mes_status', name: 'mensalidade.mes_status' },
                { data: 'tur_nome', name: 'mensalidade.tur_nome' }
            ]
            /*
            *
            * aluno.alu_nome
             { data: 'alu_nome', name: 'alu_nome' },
             { data: 'alu_cpf', name: 'alu_cpf' },
             { data: 'alu_tel', name: 'alu_tel' }
            * */
        });
    });
</script>
@endpush