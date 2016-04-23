@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Editando o curso: <span style="color: #005983">{!! $curso->cur_nome !!}</span> </h3>
        </div>
        @if($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(array('url' => "curso/$curso->id/update", 'method'=>'put')) !!}
        <div class="form-group">
            {!! Form::label('Polo') !!}
            {!! Form::select('polo', $todosPolos, $cur_pol_id, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Nome do Curso') !!}
            {!! Form::text('nome', $curso->cur_nome, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Area do Curso') !!}
            {!! Form::text('area', $curso->cur_area, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar Edi&ccedil;&atilde;o', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
