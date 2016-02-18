@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Cadastro de Polo</h3>
        </div>

        <!-- validacao de erros -->
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(array('url' => 'polo/store')) !!}
        <div class="form-group">
            {!! Form::label('Nome do Polo') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar Polo', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
    <div class="container">
        <h4>Lista de Cursos</h4>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Cod</th>
                <th>Nome</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>

            </tr>
            </thead>
            <tbody>
            @foreach($polos as $polo)
                <tr>
                    <td>{{ $polo->cur_id }}</td>
                    <td>{{ $polo->cur_nome }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('polos.edit',['id'=>$polo->cur_id]) }}" class="btn-sm btn-success">Editar</a>
                    </td>
                    <td style="text-align: center">
                        <a href="{{ route('polos.destroy',['id'=>$polo->cur_id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
