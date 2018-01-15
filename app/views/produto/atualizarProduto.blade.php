@extends('layout')
@section('titulo', 'Atualizar Produtos')
@section('conteudo')

	<div class="container">
		<ol class="breadcrumb">
			<li><a href="">Início</a></li>
			<li><a href="{{url('produtos')}}">Produtos</a></li>
			<li class="active"><a href="">Atualizar</a></li>
		</ol>

		<div class="row cabecalho">
			<div class="col-xs-12 col-md-6">
				<h1>Atualizar Produto</h1>
			</div>
		</div>

	
	<form  method='POST' action="{{url('produtos/atualizar/' .  $produto->id)}}">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="row">
					<div class="from-group col-sm-6">
						<label class="control-lable" for="preco">Preço sugerido</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="preco" id="preco" value="{{$produto->preco}}" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-6">
						<label class="control-lable" for="nome">Nome</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="nome" id="nome" value="{{$produto->nome}}" class="form-control" required>
						</div>
					</div>
				</div>
				<input type="hidden" name="id" value="{{$produto->id}}">
				<br>
				<div class="modal-footer">
					<button type="reset" class="btn btn-danger">Limpar</button>
					<button type="submit" class="btn btn-primary">Salvar alterações</button>
				</div>
			</div>	
		</div>
	</form>
	
@stop