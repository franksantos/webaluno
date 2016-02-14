@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Cadastro de Aluno</h3>
        </div>

        {!! Form::open(array('url' => 'aluno/store')) !!}
        <div class="form-group">
            {!! Form::label('Turma') !!}
            {!! Form::select('turma', $turmas,'', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Nome') !!}
            {!! Form::text('nome', null, ['id'=>'nome','class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('CPF') !!}
            {!! Form::text('cpf', null, ['id'=>'cpf','class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Telefone') !!}
            {!! Form::text('telefone', null, ['id'=>'telefone','class' => 'form-control']) !!}
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
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th colspan="2" style="text-align: center">A&ccedil;&otilde;es</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->alu_nome }}</td>
                            <td>{{ $aluno->alu_cpf }}</td>
                            <td>{{ $aluno->alu_tel }}</td>
                            <td style="text-align: center">
                                <a href="{{ route('alunos.edit',['id'=>$aluno->alu_id]) }}" class="btn-sm btn-success">Editar</a>

                            </td>
                            <td style="text-align: center">
                                <a href="{{ route('alunos.destroy',['id'=>$aluno->alu_id]) }}" class="btn-sm btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        //máscara para o cpf
        $('#cpf').inputmask("999.999.999-99", {"placeholder": "___.___.___-__"});
        //máscara para o telefone
        $('#telefone').inputmask("(99) 99999-9999", {"placeholder": "(__) _____-____"});
    </script>
@endsection