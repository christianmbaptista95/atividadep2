@extends('layout.padrao')


@section('conteudo')


@section('titulo','Sistema de gerenciamento de Alunos')


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
		<!--  Card -->
		<div class="card-header">

			<div class="row">

				<div class="col-sm-6">
					<div class="card border-secondary">
						<div class="card-body">
							<h3 class="card-title">Cadastro de Alunos</h3>
							<p class="card-text">Gerenciamento das informações dos
								alunos.</p>
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastroAlunos">Cadastro de Alunos</a>
						</div>
					</div>
				</div>




				<div class="col-sm-6">
					<div class="card border-secondary">
						<div class="card-body">

							<h3 class="card-title">Cadastro de Disciplinas</h3>
							<p class="card-text">Gerenciamento das informações das
								disciplinas.</p>
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastroDisciplinas">Cadastro de
								Disciplinas</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card-header">
			<div class="row">
				<div class="col-sm-6">
					<div class="card border-secondary">
						<div class="card-body">

							<h3 class="card-title">Cadastro de Turmas</h3>
							<p class="card-text">Gerenciamento das informações das
								Turmas.</p>
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastroTurmas">Cadastro de Turmas</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection