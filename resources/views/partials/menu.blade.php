    <nav class="navbar navbar-inverse"><!-- <nav class="navbar navbar-default">  -->
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/home') }}">IESPIMA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @if (Auth::guest())

                    @else
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
                            <ul class="dropdown-menu">-->
                                <li><a href="{!! route('cursos.create') !!}">Cursos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('turma/create')}}">Categorias</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{!! route('alunos.create') !!}">Alunos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{!! route('mensalidades.create') !!}">Mensalidades</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{!! url('pagamento/create') !!}">Pagamentos</a></li>
                                <li><a href="{!! url('despesa/create') !!}">Despesas</a></li>
                            <!--</ul>
                        </li>-->
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relat&oacute;rios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cursos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Turmas</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Alunos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>-->
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisar <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{-- {!! url('aluno/busca') !!}  --}}">Alunos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{-- {!! route('pagamentos.pesquisar') !!}  --}}">Pagamentos</a></li>
                                <li role="separator" class="divider"></li>
                                <!--<li><a href="#">Alunos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>-->
                            <!--</ul>
                        </li>-->
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <!--<li><a href="{{ url('/register') }}">Registrar-se</a></li>-->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
