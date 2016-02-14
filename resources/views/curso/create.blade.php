@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Cadastro de Curso</h3>
        </div>

        <!-- validacao de erros -->
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(array('url' => 'curso/store')) !!}
        <div class="form-group">
            {!! Form::label('Polo') !!}
            {!! Form::select('polo', $todosPolos) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Nome do Curso') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Area do Curso') !!}
            {!! Form::select('area',
                [''=>'Selecione a Area','Ciencias Exatas e da Terra'=>'Ci&ecirc;ncias Exatas e da Terra',
                'Ciencias Biologicas'=>'Ci&ecirc;ncias Humanas',
                'Saude'=>'Ciencias da Saude',
                'Engenharias'=>'Engenharias',
                'Biologicas'=>'Ciencias Biologicas', ''],'', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
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
                <th>Area</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>

            </tr>
            </thead>
            <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->cur_id }}</td>
                    <td>{{ $curso->cur_nome }}</td>
                    <td>{{ $curso->cur_area }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('cursos.edit',['id'=>$curso->cur_id]) }}" class="btn-sm btn-success">Editar</a>
                    </td>
                    <td style="text-align: center">
                        <a href="{{ route('cursos.destroy',['id'=>$curso->cur_id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
