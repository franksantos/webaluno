@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Editando o aluno: <span style="color: #005983">{!! $aluno->alu_nome !!}</span> </h3>
        </div>

        {!! Form::open(array('url' => "aluno/$aluno->alu_id/update", 'method'=>'put')) !!}
        <div class="form-group">
            {!! Form::label('Turma') !!}
            {!! Form::select('turma', $turmas, $alu_tur_id, ['id'=>'turma','class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Nome') !!}
            {!! Form::text('nome', $aluno->alu_nome, ['id'=>'nome','class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('CPF') !!}
            {!! Form::text('cpf', $aluno->alu_cpf, ['id'=>'cpf','class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Telefone') !!}
            {!! Form::text('telefone', $aluno->alu_tel, ['id'=>'telefone','class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar Edi&ccedil;&atilde;o', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


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
