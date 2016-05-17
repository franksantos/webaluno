@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box box-header">
            <h3 class="box-title">Este Pagamento foi CLONADO </h3>
        </div>
        <div class="box-body">
            <div class="box-danger">
                <h4> <a href="{{ route('pagamentos.show',['id'=>$mensalidade])}}" class="btn btn-info">Ver Detalhes</a> </h4>
                <h4> <a href="{{ url('pagamento/lista')}}" class="btn btn-primary">Voltar</a> </h4>
            </div>
        </div>
    </div>

    <div class="modal modal-danger" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" data-dismiss="modal" class="close" type="button">
                    <span aria-hidden="true">x</span></button>
                <h4 class="modal-title">ATEN&Ccedil;&Atilde;O</h4>
            </div>
            <div class="modal-body">
                <h4>Comprovante de Pagamento Clonado.</h4>

                    <h4> <a href="{{ route('pagamentos.clonado.detalhes',['id'=>$mensalidade])}}" class="btn btn-info">Ver Detalhes</a> </h4>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-sm" type="button">FECHAR</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection

@if($clonado)
@section('scripts')
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        })
    </script>
@endsection
@endif

