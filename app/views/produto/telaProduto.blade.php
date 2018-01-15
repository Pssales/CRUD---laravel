@extends('layout')
@section('titulo', 'Produtos')
@section('conteudo')

	<div class="container">
		<ol class="breadcrumb">
			<li><a href="">Início</a></li>
			<li class="active"><a href="">Produtos</a></li>
		</ol>

		<div class="row cabecalho">
			<div class="col-xs-12 col-md-6">
				<h1>Produtos</h1>
			</div>
		</div>

		<div class="table-responsive">
			<table class="dados-venda table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Número do Produto</th> 
						<th>Nome</th> 
						<th>Preço</th> 
						<th></th>  
					</tr>
				</thead>
				<tbody> 
						 
				@foreach ($produtos as $prod)
					<tr> 
						<td> {{ $prod->id }} </td>
						<td> {{ $prod->nome }} </td>
						<td> {{ $prod->preco }} </td> 
						<td> 
							<a href="{{url('produtos/editar/' .  $prod->id)}}" data-toggle ="tooltip" title="Editar" class='body' > <span class="glyphicon glyphicon-pencil text-warning"> </span></a> 
							<a href="{{url('produto/excluir/' .  $prod->id)}}" data-toggle ="tooltip" title="Excluir"><span class="glyphicon glyphicon-trash text-danger"> </span></a>
						</td> 
					</tr>
				@endforeach

				</tbody>
			</table> 
		</div>


		<footer class="row">
			<div class="col-sm-6">
				<a class="btn btn-primary" href="{{url('produto/cadastrar')}}" >Novo Produto</a>
			</div>
		</footer>
	</div>

@stop