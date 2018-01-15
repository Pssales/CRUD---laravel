@extends('layout')
@section('titulo', 'Atualizar Cliente')
@section('conteudo')

	<div class="container">
		<ol class="breadcrumb">
			<li><a href="">Início</a></li>
			<li><a href="{{url('clientes')}}">Clientes</a></li>
			<li class="active"><a href="">Atualizar Cliente</a></li>
		</ol>

		<div class="row cabecalho">
			<div class="col-xs-12 col-md-6">
				<h1>Atualizar Clientes</h1>
			</div>
		</div>

		<form  method='POST' action="{{url('clientes/atualizar/' .  $cliente->id)}}">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="from-group col-sm-8">
						<label class="control-lable" for="nome">Nome</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="nome" id="nome" class="form-control" value="{{$cliente->nome}}">
						</div>
					</div>
					<div class="from-group col-sm-4">
						<label class="control-lable" for="cpf">CPF</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="cpf" id="cpf" class="form-control" value="<?= $cliente['cpf']; ?>">
						</div>
					</div>
					<div class="from-group col-sm-4">
						<label class="control-lable" for="telefone">Telefone</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="telefone" id="tel" class="form-control" value="<?= $cliente['telefone']; ?>">
						</div>
					</div>
					<div class="from-group col-sm-4">
						<label class="control-lable" for="email">Email</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="email" id="tel" class="form-control" value="<?= $cliente['email']; ?>">
						</div>
					</div>
					<div class="from-group col-sm-4">
						<label class="control-lable" for="dataNascimento">Data de nascimento</label>
						<div class="input">
							<div class="input-addon"></div>
							<input type="text" name="dataNascimento" id="data" class="form-control" value="<?= $cliente['dataNascimento']; ?>">
						</div>
					</div>
					<div class="from-group col-sm-4">
							<label class="control-lable" for="rua">Rua</label>
							<div class="input">
								<div class="input-addon"></div>
								<input type="text" name="rua" class="form-control" value="{{$endereco->rua}}">
							</div>
						</div>
						<div class="from-group col-sm-4">
							<label class="control-lable" for="numero">Número</label>
							<div class="input">
								<div class="input-addon"></div>
								<input type="text" name="numero" class="form-control" value="<?= $endereco['numero']; ?>">
							</div>
						</div>
						<div class="from-group col-sm-4">
							<label class="control-lable" for="bairro">Bairro</label>
							<div class="input">
								<div class="input-addon"></div>
								<input type="text" name="bairro" class="form-control" value="<?= $endereco['bairro']; ?>">
							</div>
						</div>
						<div class="from-group col-sm-5 col-md-4">
							<label class="control-lable" for="cidade">Cidade</label>
							<div class="input">
								<div class="input-addon"></div>
								<input type="text" name="cidade" class="form-control" value="<?= $endereco['cidade']; ?>">
							</div>
						</div>
						<div class="from-group col-sm-5 col-md-4">
							<label class="control-lable" for="estado">Estado</label>
							<div class="input">
								<div class="input-addon"></div>
								<input type="text" name="estado" class="form-control" value="<?= $endereco['estado']; ?>">
							</div>
						</div>
						<div class="from-group col-sm-4">
							<label class="control-lable" for="cep">CEP</label>
							<div class="input">
								<div class="input-addon"></div>
								<input type="text" name="cep" id="cep" class="form-control" value="<?= $endereco['cep']; ?>">
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="id" value="{{$cliente->id}}">
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-danger">Limpar</button>
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
		</div>
		</form>
	</div>
	
@stop