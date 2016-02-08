@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Cadastro de Aluno</h3>
        </div>

        {!! Form::open(array('url' => 'aluno/store')) !!}
        <div class="form-group">
            {!! Form::label('Nome') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('CPF') !!}
            {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Telefone') !!}
            {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        <div class="container">
                <h4>Lista de Alunos</h4>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Cod</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->alu_id }}</td>
                            <td>{{ $aluno->alu_nome }}</td>
                            <td>{{ $aluno->descricao }}</td>
                            <td>
                                <a href="{{ route('alunos.edit',['id'=>$aluno->alu_id]) }}" class="btn-sm btn-success">Editar</a>
                                <a href="{{ route('alunos.destroy',['id'=>$aluno->alu_id]) }}" class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>


@endsection
