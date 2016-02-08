@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Cadastro de Turma</h3>
        </div>

        {!! Form::open(array('url' => 'turma/store')) !!}
			<div class="form-group">
                {!! Form::label('Curso') !!}
                {!! Form::select('curso', $cursos, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Nome da Turma') !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Data de In&iacute;cio') !!}
                {!! Form::date('data_inicio', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>
    <div class="container">
        <h4>Lista de Turmas</h4>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome da Turma</th>
                <th>Data de In&iacute;cio</th>
                <th>A&ccedil;&atilde;o</th>

            </tr>
            </thead>
            <tbody>
            @foreach($turmas as $turma)
                <tr>
                    <td>{{ $turma->tur_nome }}</td>
                    <td>{{ implode('/', array_reverse(explode('-', $turma->tur_data_inicio))) }}</td>
                    <td align="center">
                        <a href="{{ route('turmas.edit',['id'=>$turma->tur_id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('turmas.destroy',['id'=>$turma->tur_id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection



