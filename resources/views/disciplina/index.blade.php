@extends('layout.padrao')

@section('titulo','Listagem de Disciplinas')

@section('conteudo')

<div class="card">

    <!-- Cabeçalho -->
    <div class="card-header">

        <span><b>Controle de Disciplinas</b></span>
    </div>
    <!-- Corpo -->
    <div class="card-body">


        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Carga Horária</th>
                    <th colpan="3">Operações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($disciplinas as $d)
                <tr>
                    <td>{{$d['id']}}</td>
                    <td>{{$d['nome']}}</td>
                    <td>{{$d['cargaHoraria']}}</td>
                    <td>
                        <div class="well">

                            <div class="dropdown">
                                <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Opções <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="{{route('disciplina.show', $d['id'])}}" class="btn btn-sm btn-success">Detalhes</a></li>
                                    <li><a href="{{route('disciplina.edit', $d['id'])}}" class="btn btn-sm btn-warning">Editar</a></li>
                                    <li>
                                        <form action="{{ route('disciplina.destroy', $d->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-sm btn-danger" onclick="alert('Disciplina excluida com sucesso!')">Excluir</button>
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
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastroDisciplinas">Nova Disciplina</a>
    </div>
</div>
@endsection