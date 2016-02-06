@extends(`layouts.app`)
@section(`conteudo`)
    <div class="container">
        <h1>Alunos</h1>
        <a href="{{ route('cursos.create') }}" class="btn btn-default">Cadastrar Curso</a>
        <br />
        <br />
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Cod</th>
                <th>Nome</th>
                <th>Area</th>

            </tr>
            </thead>
            <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>
                        <a href="{{ route('cursos.edit',['id'=>$curso->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('cursos.destroy',['id'=>$curso->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection