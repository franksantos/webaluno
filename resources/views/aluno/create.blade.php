@extends('layouts.app')

@section('content')
    @if($sucesso==true)
        <!-- div para exibir uma mensagem de confirmacao se o foi realmente cadastrado com SUCESSO -->
        <!-- Modal Mensagem  -->
        <!-- inicio -->
        <div class="modal fade" id="sucessoAjax" tabindex="-1" role="dialog" aria-     labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">SALVO COM SUCESSO</h4>
                    </div>
                    <div class="modal-body">
                        <p id="retorno">

                        </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- FIM Mensagem de SUCESSO-->
    @endif
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Cadastro de Aluno</h3>
        </div>

        {!! Form::open(array('url' => 'aluno/store')) !!}

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Turma') !!}
                    {!! Form::select('turma', $turmas,'', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Nome') !!}
                    {!! Form::text('nome', null, ['id'=>'nome','class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('CPF') !!}
                    {!! Form::text('cpf', null, ['id'=>'cpf','class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('Telefone') !!}
                    {!! Form::text('telefone', null, ['id'=>'telefone','class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::submit('Salvar', ['class' => 'btn btn-block btn-primary btn-lg']) !!}
                </div>
            </div>

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
                                <a href="{{ route('alunos.edit',['id'=>$aluno->id]) }}" class="btn-sm btn-success">Editar</a>

                            </td>
                            <td style="text-align: center">
                                <a href="{{ route('alunos.destroy',['id'=>$aluno->id]) }}" class="btn-sm btn-danger">Remover</a>
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
        //m�scara para o cpf
        $('#cpf').inputmask("999.999.999-99", {"placeholder": "___.___.___-__"});
        //m�scara para o telefone
        $('#telefone').inputmask("(99) 99999-9999", {"placeholder": "(__) _____-____"});
    </script>
@endsection