@extends('layout.padrao')

@section('titulo','Listagem de Registro Aluno')

@section('conteudo')

<div class="card">
    <div class="card-header">
        <span><b>Detalhes do Aluno</b></span>
    </div>

    <div class="card-body">
        <h5 class="text-center mb-4 bg-success text-light p-1">Informações
            Aluno:</h5>

        <div class="row">

            <div class="col-md-4">
                <b> Nome:</b>
                {{$aluno->nome}}
            </div>

            <div class="col-md-4">
                <b>E-mail:</b>
                {{$aluno->email}}
            </div>
        </div>
    </div>

    <div class="card-footer">
        <a class="btn btn-sm btn-primary" href="{{route('aluno.index')}}">Voltar</a>
    </div>
</div>
@endsection