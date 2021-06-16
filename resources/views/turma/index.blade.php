@extends('layout.padrao')

@section('titulo','Listagem de Turmas')

@section('conteudo')

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
                                            <button type="submit" class="btn-sm btn-danger" onclick="alert('Turma excluida com sucesso!')">Excluir</button>
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
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastroTurmas">Nova Turma</a>
    </div>
</div>
@endsection