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
            {!! Form::label('Nome do Curso') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Area do Curso') !!}
            {!! Form::select('area',
                [''=>'Selecione a Area','Geral'=>'Geral',
                'Outras'=>'Outras', ''],'', ['class' => 'form-control']) !!}
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
                <th colspan="2" style="text-align: center">A&ccedil;&otilde;es</th>


            </tr>
            </thead>
            <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->cur_nome }}</td>
                    <td>{{ $curso->cur_area }}</td>
                    <td style="text-align: center">
                        <a href="{{ route('cursos.edit',['id'=>$curso->id]) }}" class="btn-sm btn-success">Editar</a>
                    </td>
                    <td style="text-align: center">
                        <a href="{{ route('cursos.destroy',['id'=>$curso->id]) }}" id="btnRemover" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



    <!-- div para exibir uma mensagem de confirmacao se o usuario deseja realmente excluir um curso -->
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


@endsection
@section('scripts')
    <script>
       $("#btnRemover").click(function(e){
           var teste = confirm("Tem certeza que deseja Deletar este curso?");
           if(teste==true){

           }else{
               e.preventDefault();
           }
        });
    </script>
@endsection