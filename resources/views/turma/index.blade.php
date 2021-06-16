@extends('layout.padrao')


@section('conteudo')


@section('titulo','Listagem de Turmas')
<div class="container">

    <div class="card-header">

        <h3>Sistema de Gerenciamento de Alunos</h3>

    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{route('home')}}">Home</a>
                <a class="nav-item nav-link" href="{{route('aluno.index')}}">Alunos</a>
                <a class="nav-item nav-link" href="{{route('disciplina.index')}}">Disciplinas</a>
                <a class="nav-item nav-link" href="{{route('turma.index')}}">Turmas</a>

            </div>
        </div>
    </nav>

    <div class="card">

        <!-- Cabeçalho -->
        <div class="card-header">

            <span><b>Controle de Turmas</b></span>
        </div>
        <!-- Corpo -->
        <div class="card-body">


            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ano</th>
                        <th colpan="3">Operações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($turmas as $t)
                    <tr>
                        <td>{{$t['id']}}</td>
                        <td>{{$t['nome']}}</td>
                        <td>{{$t['ano']}}</td>
                        <td>
                                <div class="well">

                                    <div class="dropdown">
                                        <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Opções <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                            <li><a href="{{route('turma.show', $t['id'])}}" class="btn btn-sm btn-success">Detalhes</a></li>
                                            <li><a href="{{route('turma.edit', $t['id'])}}" class="btn btn-sm btn-warning">Editar</a></li>
                                            <li>
                                                <form action="{{ route('turma.destroy', $t->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-sm btn-danger" onclick="alert('Turma excluida com sucesso!')" >Excluir</button>
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

    </div>

    <!-- Rodapé -->
    <div class="card-footer">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastroTurmas">Nova Turma</a>
    </div>
</div>
@endsection