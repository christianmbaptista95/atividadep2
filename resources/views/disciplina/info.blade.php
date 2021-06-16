@extends('layout.padrao')


@section('titulo','Listagem de Registro Disciplina')

@section('conteudo')

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