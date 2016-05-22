@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Editando a turma: <span style="color: #005983">{!! $turma->tur_nome !!}</span> </h3>
        </div>

        <!-- validacao de erros -->
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(array('url' => "turma/$turma->id/update", 'method'=>'put')) !!}
        <div class="form-group">
            {!! Form::label('Curso') !!}
            {!! Form::select('curso', $cursos, $cur_id, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Polo') !!}
            {!! Form::select('polo', $polos, $pol_id, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Nome da Turma') !!}
            {!! Form::text('nome', $turma->tur_nome, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Data de In&iacute;cio') !!}
            {!! Form::date('data_inicio', $turma->tur_data_inicio, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar Edi&ccedil;&atilde;o', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection



