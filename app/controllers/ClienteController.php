<?php
 
Class ClienteController extends BaseController{

	public function clientes(){
		$clientes= Cliente::all();
		$enderecos= Endereco::all();
		return View::make('cliente.telaCliente', compact('clientes','enderecos'));
	}

	public function cadastrar(){
		$enderecos= Endereco::all();
		return View::make('cliente.CadastrarCliente',compact('enderecos'));
	}
	
	public function salvar(){
		$dados = Input::all();
		$cliente = new Cliente;
		$cliente->nome = $dados['nome'];
		$cliente->cpf = $dados['cpf'];
		$cliente->telefone = $dados['telefone'];
		$cliente->dataNascimento= $dados['dataNascimento'];
		$cliente->email = $dados['email'];
		$cliente->save();

		$insertedId =$cliente->id;

		$endereco = new Endereco;
		$endereco->cliente_id = $insertedId;
		$endereco->rua = $dados['rua'];
		$endereco->numero = $dados['numero'];
		$endereco->bairro = $dados['bairro'];
		$endereco->cidade = $dados ['cidade'];
		$endereco->estado = $dados['estado'];
		$endereco->cep = $dados['cep'];
		$endereco->save();
	    
	    return Redirect::to('clientes');
	}

	public function editar($id){
		$cliente = Cliente::find($id);
		$endereco = Endereco::where('cliente_id','=',$id)->first();
		return View::make('cliente.atualizarCliente',compact('cliente', 'endereco'));
	}

	public function atualizar($id){

		$dados= Input::all();

		$cliente = Cliente::find($id);
		$cliente->nome = $dados['nome'];
		$cliente->cpf = $dados['cpf'];
		$cliente->telefone = $dados['telefone'];
		$cliente->dataNascimento = $dados['dataNascimento'];
		$cliente->email= $dados['email'];
		$cliente->update();


		$endereco = Endereco::where('cliente_id','=',$id)->first();
		$endereco->rua = $dados['rua'];
		$endereco->numero = $dados['numero'];
		$endereco->bairro = $dados['bairro'];
		$endereco->cidade = $dados['cidade'];
		$endereco->estado = $dados['estado'];
		$endereco->cep = $dados['cep'];
		$endereco->cliente_id = ($id);

		$endereco->update();
		
		return Redirect::to('clientes');
	}

	public function excluir($id){
		$cliente = Cliente::find($id);
		$endereco = Endereco::where('cliente_id','=',$id)->first();
		$vendas = Venda::where('cliente_id','=',$id)->get();

		foreach ($vendas as $venda) {
			$produto = $venda->produtos;
			foreach($produto as $prod){
				$prod->vendas()->detach($venda->id);
			}
			$venda->delete();
		}

		$endereco->delete();
		$cliente->delete();
		return Redirect::to('clientes');
	}

}