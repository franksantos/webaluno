@extends(`layouts.app`)
@section(`conteudo`)
    <div class="container">
        <h1>Alunos</h1>
        <a href="{{ route('produtos.create') }}" class="btn btn-default">Cadastrar Aluno</a>
        <br />
        <br />
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Cod</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->descricao }}</td>
                    <td>
                        <a href="{{ route('alunos.edit',['id'=>$aluno->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('alunos.destroy',['id'=>$aluno->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection