@extends('layout.padrao')

@section('titulo','Alteração de Cadastro de Aluno')

@section('conteudo')

<div class="card">
    <div class="card-header">
        <span><b>Alteração de Cadastro</b></span>
    </div>


    <div class="card-header">

        <div class="card-body">
            <h5 class="text-center mb-4 bg-warning text-light p-1"><b>Aluno</b> </h5>

            <form action="{{ route('aluno.update', $aluno->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="row">


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input class="form-control" type="text" name="nome" id="nome" value="{{ $aluno->nome}}" /></p>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ $aluno->email}} " /></p>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <button type="submit" class="mt-2 btn btn-block btn-primary" onclick="alert('Aluno alterado com sucesso!')">Gravar</button>
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