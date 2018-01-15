@extends('layout')
@section('titulo', 'Cadastrar Cliente')
@section('conteudo')


	<div class="container">
		<ol class="breadcrumb">
			<li><a href="">Início</a></li>
			<li><a href="{{url('clientes')}}">Clientes</a></li>
			<li class="active"><a href="">Novo Cliente</a></li>
		</ol>

		<div class="row cabecalho">
			<div class="col-xs-12 col-md-6">
				<h1>Cadastrar Clientes</h1>
			</div>
		</div>
		<form  method='POST' action="{{url('clientes/salvar')}}">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="from-group col-sm-8">
						<label class="control-lable" for="nome">Nome</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="nome" id="nome" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-4">
						<label class="control-lable" for="cpf">CPF</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="cpf" id="cpf" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-3">
						<label class="control-lable" for="telefone">Telefone</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="telefone" id="tel" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-3">
						<label class="control-lable" for="dataNascimento">Data de nascimento</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="dataNascimento" id="data" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-6 ">
						<label class="control-lable" for="email">Email</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="email"  class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-6 ">
						<label class="control-lable" for="rua">Rua</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="rua" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-3">
						<label class="control-lable" for="numero">Número</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="numero" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-3">
						<label class="control-lable" for="bairro">Bairro</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="bairro" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-5 col-md-4">
						<label class="control-lable" for="cidade">Cidade</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="cidade" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-5 col-md-4">
						<label class="control-lable" for="estado">Estado</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="estado" class="form-control" required>
						</div>
					</div>
					<div class="from-group col-sm-4">
						<label class="control-lable" for="cep">CEP</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="cep" id="cep" class="form-control" required>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-danger">Limpar</button>
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
			
		</form>
	</div>

@stop