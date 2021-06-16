@extends('layout.padrao')

@section('titulo','Listagem de Registro Turma')

@section('conteudo')

<div class="card">
    <div class="card-header">
        <span><b>Detalhes da Turma</b></span>
    </div>

    <div class="card-body">
        <h5 class="text-center mb-4 bg-success text-light p-1">Informações
            Turma:</h5>

        <div class="row">

            <div class="col-md-4">
                <b> Nome:</b>
                {{$turma->nome}}
            </div>

            <div class="col-md-4">
                <b>Ano:</b>
                {{$turma->ano}}
            </div>

        </div>
    </div>

    <div class="card-footer">
        <a class="btn btn-sm btn-primary" href="{{route('turma.index')}}">Voltar</a>
    </div>
</div>
@endsection