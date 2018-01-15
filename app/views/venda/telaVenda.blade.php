@extends('layout')
@section('titulo', 'Vendas')
@section('conteudo')


	<div class="container">
		<ol class="breadcrumb">
			<li><a href="">Início</a></li>
			<li class="active"><a href="">Vendas</a></li>
		</ol>

		<div class="row cabecalho">
			<div class="col-xs-12 col-md-6">
				<h1>Vendas</h1>
			</div>
		</div>

		<div class="table-responsive">
			<table class="dados-venda table table-striped table-bordered table-hover">
				<thead>
					<tr>
					    <th>Número da venda</th>
					    <th>Data da Venda</th>
					    <th>Cliente</th>
						<th>Nome do produto</th> 
						<th></th>
					</tr>
				</thead>
				<tbody>			
					@foreach($vendas as $venda)
						<tr> 
							<td> {{ $venda->id }} </td>
							<td> {{ $venda->data }}</td>
							<td> {{ $venda->cliente->nome }}</td>
							<td> 
								@foreach($venda->produtos as $p)
									{{ $p->nome }} ;
								@endforeach
							</td>
							<td class="text-center">
					            <a href="{{url('vendas/editar/' .  $venda->id)}}" data-toggle ="tooltip" title="Atualizar"><span class="glyphicon glyphicon-pencil text-warning"></span></a> 
							    <a href="{{url('vendas/excluir/' .  $venda->id)}}" data-toggle ="tooltip" title="Excluir"><span class="glyphicon glyphicon-trash text-danger"></span></a> 
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<footer class="row">
			<div class="col-sm-6">
				<a class="btn btn-primary" href="{{url('vendas/cadastrar')}}" >Nova Venda</a>
			</div>
		</footer>
	</div>
@stop
