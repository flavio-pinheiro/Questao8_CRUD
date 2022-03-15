@extends('layouts.main')

@section('title', $pessoa->nome)

@section('body') 
	<div class="col-md-12 offset-md-1">
		<h1>Editar Pessoa</h1>
		<form action="/pessoas/update/{{ $pessoa->id }}" method="post" enctype="form-data">
			@csrf
			<div class="form-group">
				<label for="nome">Nome (Obrigatório)</label>
				<input type="text" class="form-control" id="nome" name="nome" value="{{ $pessoa->nome }}">
			</div>
			<div class="form-group">
				<label for="cpf">CPF (Obrigatório)</label>
				<input type="text" class="form-control" id="cpf" name="cpf" value="{{ $pessoa->cpf }}">
			</div>

			<div class="form-group">
				<label for="email">E-mail (Obrigatório)</label>
				<input type="email" class="form-control" id="email" name="email" value="{{ $pessoa->email }}">
			</div>
			<div class="form-group">
				<label for="data_nasc">Data_Nasc</label>
				<input type="date" class="form-control" id="data_nasc" name="data_nasc" value="{{ $pessoa->data_nasc }}">
			</div>

			<div class="form-group">
				<label for="nacionalidade">Nacionalidade</label>
				<input type="text" class="form-control" id="nacionalidade" name="nacionalidade" value="{{ $pessoa->nacionalidade }}">
			</div>

			<div class="form-group">
				<label for="data_nasc">Telefones</label>
				<input type="text" class="form-control" id="telefones" name="telefones" value="{{ $pessoa->telefones }}">
			</div>

			<br>
			
			<input type="submit" class="btn btn-primary" value="Salvar">

			<a href="/" class="btn btn-warning">Voltar</a>

		</form>
	</div>

@endsection