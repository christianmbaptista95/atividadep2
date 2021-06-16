@extends('layout.padrao')

@section('titulo','Alteração de Cadastro de Disciplina')

@section('conteudo')

<div class="card">
    <div class="card-header">
        <span><b>Alteração de Cadastro</b></span>
    </div>


    <div class="card-header">

        <div class="card-body">
            <h5 class="text-center mb-4 bg-warning text-light p-1"><b>Disciplina</b> </h5>

            <form action="{{ route('disciplina.update', $disciplina->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="row">


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input class="form-control" type="text" name="nome" id="nome" value="{{ $disciplina->nome}}" /></p>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cargaHoraria">Carga Horária:</label>
                            <input class="form-control" type="number" name="cargaHoraria" id="cargaHoraria" value="{{ $disciplina->cargaHoraria}}" /></p>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <button type="submit" class="mt-2 btn btn-block btn-primary" onclick="alert('Disciplina alterada com sucesso!')">Gravar</button>
                    </div>

                    <div class="col-sm-6 col-md-2">
                        <input class="mt-2 btn btn-block btn-secondary" value="Cancelar" onClick="history.go(-1)">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection