<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IESPIMA - Sistema de Gest&atilde;o Acad&ecirc;mica</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLte/bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--teste -->
    <!--<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLte/plugins/datepicker/datepicker3.css")}}">
    <!-- Timepicker -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLte/plugins/timepicker/bootstrap-timepicker.min.css")}}">
    <!-- DataTable for laravel -->
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <!-- CSS do Plugin Select2 -->
    <link href="{{ asset("/bower_components/AdminLte/plugins/select2/select2.css") }}" rel="stylesheet">

    <style>
        .error{color:red;}
    </style>
    <!--<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}



    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

    @include('partials.menu')

            <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        @yield('content')
    </section><!-- /.content -->


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Datepicker -->
    <script src="{{ asset("/bower_components/AdminLte/plugins/datepicker/bootstrap-datepicker.js")}}"></script>
    <!-- Timepicker -->
    <script src="{{ asset("/bower_components/AdminLte/plugins/timepicker/bootstrap-timepicker.js")}}"></script>
    <!-- Locales Datepicker -->
    <script src="{{ asset("/bower_components/AdminLte/plugins/datepicker/locales/bootstrap-datepicker.pt-BR.js")}}"></script>
    <!-- Input Mask -->
    <script src="{{ asset("/bower_components/AdminLte/plugins/input-mask/jquery.inputmask.js")}}"></script>
    <!-- Input Mask DAte Extensions -->
    <script src="{{ asset("/bower_components/AdminLte/plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
    <!-- Input Mask Extensions -->
    <script src="{{ asset("/bower_components/AdminLte/plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>
    <!-- Plugin Plentz MaskMoney -->
    <script src="{{ asset("/bower_components/AdminLte/plugins/plentz/jquery.maskMoney.js")}}"></script>
    <!-- Plugin Select2 -->
    <script src="{{ asset("/bower_components/AdminLte/plugins/select2/select2.js") }}"></script>
    <!-- Plugin Validate -->
    <script src="{{ asset("/bower_components/AdminLte/plugins/validate/jquery.validate.min.js") }}"></script>
    <script src="{{ asset("/bower_components/AdminLte/plugins/validate/localization/messages_pt_BR.min.js") }}"></script>
    <!-- DataTable laravel -->
    <script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    @yield('scripts')
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
