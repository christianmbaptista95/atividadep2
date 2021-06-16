@extends('layout.padrao')


@section('conteudo')


@section('titulo','Alteração de Cadastro de Turma')

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
        <span><b>Alteração de Cadastro</b></span>
    </div>


    <div class="card-header">

    <div class="card-body">
        <h5 class="text-center mb-4 bg-warning text-light p-1"><b>Turma</b> </h5>

        <form action="{{ route('turma.update', $turma->id) }}" method="POST">

        @csrf
        @method('PUT')
            <div class="row">


            <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input class="form-control" type="text" name="nome" id="nome" value="{{ $turma->nome}}"/></p>
                    </div>
                </div>



                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ano">Ano:</label>
                        <input class="form-control" type="number" name="ano" id="ano" value="{{ $turma->ano}}"/></p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6 col-md-2">
                    <button type="submit" class="mt-2 btn btn-block btn-primary" onclick="alert('Turma alterada com sucesso!')">Gravar</button>
                </div>

                <div class="col-sm-6 col-md-2">
                    <input class="mt-2 btn btn-block btn-secondary" value="Cancelar" onClick="history.go(-1)">
                </div>
            </div>
        </form>

    </div>
    @endsection