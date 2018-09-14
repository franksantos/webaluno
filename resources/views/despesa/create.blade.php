@extends('layouts.app')

@section('content')
  @if($test==1)
  <!-- Modal Mensagem SUCESSO  -->
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
      <h3 class="box-title">Cadastro de Despesa</h3>
        <!-- aqui entrara a tela de detalhes do pagamento -->
        {!! Form::open(array('url' => 'despesa/store')) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Descrição') !!}
                    {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Data de Vencimento') !!}
                    {!! Form::text('vencimento', null, ['id'=>'vencimento','class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Tipo de Pagamento') !!}
                    {!! Form::radio('tipo_pagamento', "0", ['class'=>'form-control']) !!} Dinheiro
                    {!! Form::radio('tipo_pagamento', "1", ['class'=>'form-control']) !!} Cartão de Crédito
                </div>
                <div class="form-group">
                    {!! Form::label('Situação (Status da despesa)') !!}
                    {!! Form::radio('situacao', '0', ['class'=>'form-control']) !!} Em Dias
                    {!! Form::radio('situacao', '1', ['class'=>'form-control']) !!} Paga
                    {!! Form::radio('situacao', '2', ['class'=>'form-control text-red']) !!} Em Atraso
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Valor ( em Reais )') !!}
                    {!! Form::number('valor', null, [
                      'min'=>'0.00',
                      'max'=>'1000.00',
                      'step'=>'0.01',
                      'id'=>'valor',
                      'class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Data do Pagamento') !!}
                    {!! Form::text('data_pagamento', null, ['id'=>'data_pagamento', 'class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Observação') !!}
                    {!! Form::textarea('obs',null, ['id'=>'valor_parcela','class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-sm-4">
                    <a href="javascript:history.go(-1)" class="btn btn-success">Voltar</a>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
@section('scripts')
  <script>
      $(document).ready(function(){
          //datepicker da data de pagamento
          $('#vencimento').datepicker({
              format:'dd/mm/yyyy',
              language: 'pt-BR',
              autoclose: true,
              todayHighlight: true
          });
          //m�scara para o telefone
          // $('#hora_pagto').inputmask("99:99:99", {"placeholder": "__:__:__"});

          /** validate */
          $("form").validate({
              debug: false,
              rules:{
                  vencimento:{required:true}
              },
              messages:{
                  vencimento:{
                      required:"Esse campo n&atilde;o pode ser vazio"
                  }
              },
              submitHandler: function(form){
                  return true;
              }
          });
      });

  </script>
@endsection
