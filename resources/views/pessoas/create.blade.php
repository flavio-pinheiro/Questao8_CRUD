@extends('layouts.main')

@section('title', 'Create')

@section('body')
	<div id="" class="col-md-6 offset-3">
		<h1>Adicionar Pessoa</h1>
		<form action="/pessoas" method="post" enctype="form-data">
			@csrf
			<div class="form-group">
				<label for="nome">Nome (Obrigatório)</label>
				<input type="text" class="form-control" id="nome" name="nome">
			</div>
			<div class="form-group">
				<label for="cpf">CPF (Obrigatório)</label>
				<input type="text" class="form-control" id="cpf" name="cpf">
			</div>

			<div class="form-group">
				<label for="email">E-mail (Obrigatório)</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="data_nasc">Data_Nasc</label>
				<input type="date" class="form-control" id="data_nasc" name="data_nasc">
			</div>
			<div class="form-group">
				<label for="nacionalidade">Nacionalidade</label>
				<input type="text" class="form-control" id="nacionalidade" name="nacionalidade">
			</div>
			<div class="form-group">
				<label for="telefones">Telefones (Separados por vírgula)</label>
				<input type="text" class="form-control" id="telefones" name="telefones">
			</div>

			<br>
			
			<input type="submit" class="btn btn-primary" value="Adicionar">

			<a href="/" class="btn btn-warning">Voltar</a>

		</form>
	</div>

@endsection