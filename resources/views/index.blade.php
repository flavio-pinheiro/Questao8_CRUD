@extends('layouts.main')

@section('title', 'Início')

@section('body')
    <h1>Pessoas</h1>

    <a href="/pessoas/create" class="btn btn-primary">Nova</a>

    <div id="" class="row">
        
            <table class="table">
            	<thead>
            		<tr>
            			<th>Id</th>
            			<th>Nome</th>
            			<th>CPF</th>
            			<th>Email</th>
            			<th>Data_Nasc</th>
            			<th>Nacionalidade</th>
            			<th>Editar</th>
            			<th>Excluir</th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach($pessoas as $pessoa)
                		<tr>
                			<td>{{ $pessoa->id }}</td>
                			<td>{{ $pessoa->nome }}</td>
                			<td>{{ $pessoa->cpf }}</td>
                			<td>{{ $pessoa->email }}</td>
                			<td>{{ date('d/m/Y', strtotime($pessoa->data_nasc)) }}</td>
                			<td>{{ $pessoa->nacionalidade }}</td>
                			<td><a href="/pessoas/{{ $pessoa->id }}">Editar</a></td> 
                			<td><a href="/pessoas/delete/{{ $pessoa->id }}">Excluir</a></td>
                		</tr>
            		@endforeach
            	</tbody>
            </table>
        
    </div>

@endsection
