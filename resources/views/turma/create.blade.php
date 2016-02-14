@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Cadastro de Turma</h3>
        </div>

        <!-- validacao de erros -->
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

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
                <th>&nbsp;</th>
                <th>&nbsp;</th>

            </tr>
            </thead>
            <tbody>
            @foreach($turmas as $turma)
                <tr>
                    <td>{{ $turma->tur_nome }}</td>
                    <td>{{ implode('/', array_reverse(explode('-', $turma->tur_data_inicio))) }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('turmas.edit',['id'=>$turma->tur_id]) }}" class="btn-sm btn-success">Editar</a>

                    </td>
                    <td style="text-align: center">
                        <a href="{{ route('turmas.destroy',['id'=>$turma->tur_id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection



