@extends('layout')
@section('titulo', 'Cliente')
@section('conteudo')


	<div class="container">
		<ol class="breadcrumb">
			<li><a href="">Início</a></li>
			<li class="active"><a href="">Clientes</a></li>
		</ol>

		<div class="row cabecalho">
			<div class="col-xs-12 col-md-6">
				<h1>Clientes</h1>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-2 busca">
				<div class="input-group">
					<input type="text" name="busca" class="form-control" placeholder="Perquisar por nome do cliente">
					<span class="input-group-btn"> 
						<button type="button" class="btn btn-default">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="dados-venda table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Nome</th> 
						<th>CPF</th> 
						<th>Telefone</th> 
						<th>Data de Nascimento</th> 
						<th>Email</th> 
						<th>Cidade</th> 
						<th>Estado</th> 
						<th></th> 
					</tr>
				</thead>
				<tbody> 
				@foreach ($clientes as $cliente)
					<tr> 
						<td> {{ $cliente->nome }} </td>  
						<td> {{ $cliente->cpf }} </td> 
						<td> {{ $cliente->telefone }} </td> 	
						<td> {{ $cliente->dataNascimento }} </td>
						<td> {{ $cliente->email }} </td> 
						<td> {{ $cliente->endereco->cidade }} </td> 
						<td> {{ $cliente->endereco->estado }} </td> 
						<td class="tet-center"> 
							<a href="{{url('clientes/editar/' .  $cliente->id)}}" data-toggle ="tooltip" title="Editar"><span class="glyphicon glyphicon-pencil text-warning"> </span></a>  
						 	<a href="{{url('clientes/excluir/' .  $cliente->id)}}" data-toggle ="tooltip" title="Excluir"><span class="glyphicon glyphicon-trash text-danger"> </span></a>
						</td> 
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	
		<footer class="row">
			<div class="col-sm-6">
				<a class="btn btn-primary" href="{{url('clientes/cadastrar')}}" >Novo Cliente</a>
			</div>
		</footer>
	</div>

@stop
	