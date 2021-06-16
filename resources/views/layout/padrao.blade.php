<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('titulo')</title>

	
	<script src="{{asset('js/app.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

<div class="container">
@yield('conteudo')



	<!-- Inicio - modal para cadastro de Alunos -->
	<div class="modal fade" id="modalCadastroAlunos">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Cabeçalho -->
				<div class="modal-header">
					<h4 class="modal-title">Cadastro de Alunos</h4>
				</div>

				<!-- Corpo -->
				<div class="modal-body">
					<form action="{{ route('aluno.store') }}" method="post">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nome">Nome:</label> <input class="form-control" type="text" name="nome" id="nome">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="email">E-mail:</label> <input class="form-control" type="text" name="email" id="email">
								</div>
							</div>
						</div>
				</div>

				<!-- Rodape -->
				<div class="modal-footer">
					<button type="submit"  onclick="alert('Aluno cadastrado com sucesso!')" class="btn btn-primary btn-sm">Gravar</button>
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Fim - modal para cadastro de Alunos -->

	<!-- Inicio - modal para cadastro de Disciplinas -->
	<div class="modal fade" id="modalCadastroDisciplinas">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Cabeçalho -->
				<div class="modal-header">
					<h4 class="modal-title">Cadastro de Disciplinas</h4>
				</div>

				<!-- Corpo -->
				<div class="modal-body">
					<form action="{{ route('disciplina.store') }}" method="post">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nome">Nome:</label> <input class="form-control" type="text" name="nome" id="nome">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="cargaHoraria">Carga Horária:</label> <input class="form-control" type="number" name="cargaHoraria" id="cargaHoraria">
								</div>
							</div>
						</div>
				</div>

				<!-- Rodape -->
				<div class="modal-footer">
					<button type="submit" onclick="alert('Disciplina cadastrada com sucesso!')" class="btn btn-primary btn-sm">Gravar</button>
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Fim - modal para cadastro de Disciplinas -->

	<!-- Inicio - modal para cadastro de Turmas -->
	<div class="modal fade" id="modalCadastroTurmas">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Cabeçalho -->
				<div class="modal-header">
					<h4 class="modal-title">Cadastro de Turmas</h4>
				</div>

				<!-- Corpo -->
				<div class="modal-body">
					<form action="{{ route('turma.store') }}" method="post">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nome">Nome:</label> <input class="form-control" type="text" name="nome" id="nome">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="ano">Ano:</label> <input class="form-control" type="number" name="ano" id="ano">
								</div>
							</div>
						</div>
				</div>

				<!-- Rodape -->
				<div class="modal-footer">
					<button type="submit" onclick="alert('Turma cadastrada com sucesso!')" class="btn btn-primary btn-sm">Gravar</button>
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Fim - modal para cadastro de Turmas -->
	</div>
</body>

</html>