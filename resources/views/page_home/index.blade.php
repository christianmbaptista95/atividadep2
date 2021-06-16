@extends('layout.padrao')

@section('titulo','Sistema de gerenciamento de Alunos')

@section('conteudo')

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