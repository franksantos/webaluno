@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Cadastro de Aluno</h3>
        </div>

        {!! Form::open(array('url' => 'aluno/store')) !!}

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Tipo') !!}
                    {!! Form::select('turma', $turmas,'', ['class' => 'form-control']) !!}
                    @if($errors->has('turma'))<p class="alert alert-danger">{{$errors->first('turma')}}</p>@endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Nome') !!}
                    {!! Form::text('nome', null, ['id'=>'nome','class' => 'form-control']) !!}
                    @if($errors->has('nome'))<p class="alert alert-danger">{{$errors->first('nome')}}</p>@endif
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('CPF') !!}
                    {!! Form::text('cpf', null, ['id'=>'cpf','class' => 'form-control']) !!}
                    @if($errors->has('cpf'))<p class="alert alert-danger">{{$errors->first('cpf')}}</p>@endif
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('Telefone') !!}
                    {!! Form::text('telefone', null, ['id'=>'telefone','class' => 'form-control']) !!}
                    @if($errors->has('telefone'))<p class="alert alert-danger">{{$errors->first('telefone')}}</p> @endif
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
                <h4>Lista de Clientes</h4>
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
                                <a href="{{ route('alunos.destroy',['id'=>$aluno->id]) }}" class="btn-sm btn-danger" id="btnRemover">Remover</a>
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
    <!-- valida��o do cpf do aluno -->
    <script>
        function TestaCPF(strCPF) {
            var Soma;
            var Resto;
            Soma = 0;
            if (strCPF == "00000000000") return false;
            for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
            Resto = (Soma * 10) % 11;
            if ((Resto == 10) || (Resto == 11)) Resto = 0;
            if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
            Soma = 0;
            for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
            Resto = (Soma * 10) % 11;
            if ((Resto == 10) || (Resto == 11)) Resto = 0;
            if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
            return true;
        }

        //teste




        $("#cpf").blur(function(){
            var cpf = $('#cpf').val();
            var i = cpf.replace(".","");
            var j = i.replace("-","");
            var k = j.replace(".","");
            if(TestaCPF(k)){

            }else{
                alert("CPF Digitado Invalido. \n Verifique o CPF informado e tente novamente");
                $("#cpf").focus();
            }

        });


        $('#btnRemover').click(function(e){
            e.preventDefault();
            var teste = confirm("tem ceteza que deseja remover");
            if(teste==false){
                e.preventDefault();
            }

        });
        //alert(TestaCPF(strCPF));
    </script>

@endsection
