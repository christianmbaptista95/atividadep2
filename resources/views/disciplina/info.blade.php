@extends('layout.padrao')


@section('conteudo')


@section('titulo','Listagem de Registro Disciplina')

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
    <div class="card-header">
        <span><b>Detalhes da Disciplina</b></span>
    </div>

    <div class="card-body">
    <h5 class="text-center mb-4 bg-success text-light p-1">Informações
					Disciplina:</h5>

        <div class="row">

            <div class="col-md-4">
                <b> Nome:</b>
                {{$disciplina->nome}}
            </div>

            <div class="col-md-4">
                <b>Carga Horária:</b>
                {{$disciplina->cargaHoraria}}
            </div>
            
        </div>
    </div>

    <div class="card-footer">
        <a class="btn btn-sm btn-primary" href="{{route('disciplina.index')}}">Voltar</a>
    </div>

</div>
@endsection