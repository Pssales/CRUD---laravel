@extends('layout')
@section('titulo', 'Produtos')
@section('conteudo')
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="">Início</a></li>
			<li><a href="{{url('produtos')}}">Produtos</a></li>
			<li class="active"><a href="">Cadastrar</a></li>
		</ol>

		<div class="row cabecalho">
			<div class="col-xs-12 col-md-6">
				<h1>Produtos</h1>
			</div>
		</div>

		<form  method='POST' name="form" action="{{url('produtos/salvar')}}" data-toggle="validator" role="form">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="row">
						<div class="from-group col-sm-6">
							<label class="control-lable" for="preco">Preço</label>
							<div class="input">
								<div class="input-addon"></div>
								<input type="text" required name="preco" id="preco" class="form-control">
							</div>
						</div>
						<div class="from-group col-sm-6">
							<label class="control-lable" for="nome">Nome</label>
							<div class="input">
								<div class="input-addon"></div>
								<input type="text" required name="nome" id="nome" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="modal-footer">
				<button type="reset" class="btn btn-danger">Limpar</button>
				
				<button type="submit"  class="btn btn-primary">Salvar</button>
			</div>
		</form>
	</div>
@stop

