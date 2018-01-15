@extends('layout')
@section('titulo', 'Cadastrar Venda')
@section('conteudo')



	<div class="container">
		<ol class="breadcrumb">
			<li><a href="">Início</a></li>
			<li><a href="{{url('vendas')}}">Vendas</a></li>
			<li class="active"><a href="">Atualizar</a></li>
		</ol>

		<div class="row cabecalho">
			<div class="col-xs-12 col-md-6">
				<h1>Atualizar Venda</h1>
			</div>
		</div>
		<br>
		<form  method="POST" action="{{url('vendas/atualizar/' .  $venda->id)}}">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="row">						
						<div class="from-group col-sm-offset-2 col-sm-8">
							<label class="control-lable" for=cliente>Cliente</label>
							<select name="cliente_id" class="form-control">
								<option>Selecione</option>
								@foreach($cliente as $cliente) { 
									<option value="<?= $cliente['id']?>" <?= ($cliente['id'] == $venda['cliente_id'])? 'selected': '' ; ?>><?= $cliente['nome']?></option>
								@endforeach								
							</select>
						</div>

						<div class="from-group col-sm-8 col-sm-offset-2">
							<label class="control-lable" for="data">Data da Venda</label>
							<div class="input">
								<div class="input-addon"></div>
								<input type="text" name="data" id="data" class="form-control" value="<?= $venda['data']; ?>">
							</div>
						</div>
						<div class="from-group col-sm-offset-2 col-sm-8">
						<br>
							<label class="control-lable" for=produto>Produtos</label>
								@foreach($produtos as $produto) 
								<br>
									<input type="checkbox" name="pro[]"  value="<?= $produto->id?>"><?= $produto->nome?></>
								@endforeach								
						</div>
					</div>
					<br>
				</div>	
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-danger">Limpar</button>
				<button type="submit" class="btn btn-primary">Atualizar</button>
			</div>
		</form>
	</div>

@stop