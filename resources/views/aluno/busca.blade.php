@extends('layouts.app')

@section('content')
    <table class="table table-bordered" id="tabela-alunos">
        <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
    $(function() {
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
        });
    });
</script>
@endpush