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
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('P&oacute;lo') !!}
                    {!! Form::select('polo', $polos, '', ['class' => 'form-control']) !!}
                    @if($errors->has('polo'))<p class="alert alert-danger">{{$errors->first('polo')}}</p>@endif
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('Curso') !!}
                    {!! Form::select('curso', $cursos, '', ['class' => 'form-control']) !!}
                    @if($errors->has('curso'))<p class="alert alert-danger">{{$errors->first('curso')}}</p>@endif
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('Nome da Turma') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                    @if($errors->has('nome'))<p class="alert alert-danger">{{$errors->first('nome')}}</p>@endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Data de In&iacute;cio') !!}
                    {!! Form::text('data_inicio', null, ['id'=>'data_inicio','class' => 'form-control']) !!}
                    @if($errors->has('data_inicio'))<p class="alert alert-danger">{{$errors->first('data_inicio')}}</p>@endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
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
                        <a href="{{ route('turmas.edit',['id'=>$turma->id]) }}" class="btn-sm btn-success">Editar</a>

                    </td>
                    <td style="text-align: center">
                        <a href="{{ route('turmas.destroy',['id'=>$turma->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Mensagem Importante</h4>
                </div>
                <div class="modal-body">
                    <p>Você não tem permissão para REMOVER uma Turma. Procure o administrador do sistema.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#data_inicio').datepicker({
            format:'dd/mm/yyyy',
            language: 'pt-BR',
            autoclose: true,
            todayHighlight: true
        });
    </script>
    <script>

        //teste

        $(".btn-danger").on("click", function(e){
                e.preventDefault();
            $("#myModal").modal();
            console.log($("#btnRemovar").val());
        });
    </script>
@endsection



