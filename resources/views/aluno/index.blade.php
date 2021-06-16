@extends('layout.padrao')

@section('titulo','Listagem de Alunos')

@section('conteudo')

<div class="card">

    <!-- Cabeçalho -->
    <div class="card-header">

        <span><b>Controle de Alunos</b></span>
    </div>

    <!-- Corpo -->
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th colpan="3">Operações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $a)
                <tr>
                    <td>{{$a['id']}}</td>
                    <td>{{$a['nome']}}</td>
                    <td>{{$a['email']}}</td>

                    <div class="row">

                        <td>
                            <div class="well">

                                <div class="dropdown">
                                    <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Opções <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li><a href="{{route('aluno.show', $a['id'])}}" class="btn btn-sm btn-success">Detalhes</a></li>
                                        <li><a href="{{route('aluno.edit', $a['id'])}}" class="btn btn-sm btn-warning">Editar</a></li>
                                        <li>
                                            <form action="{{ route('aluno.destroy', $a->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-sm btn-danger" onclick="alert('Aluno excluido com sucesso!')">Excluir</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                        </td>

                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>

    <!-- Rodapé -->
    <div class="card-footer">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastroAlunos">Novo Aluno</a>
    </div>

</div>

@endsection