@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Cadastro de Turma</h3>
        </div>

        {!! Form::open(array('url' => 'turma/store')) !!}
            <div class="form-group">
                {!! Form::label('Data de In&iacute;cio') !!}
                {!! Form::date('data_inicio', null, ['class' => 'form-control']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection



