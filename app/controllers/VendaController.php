<?php 

Class VendaController extends BaseController{

	public function vendas(){
		$vendas = Venda::all();
		return View::make('venda.telaVenda',compact('vendas'));
	}

	public function cadastrar(){
		$produtos= Produto::all();
		$clientes= Cliente::all();
		return View::make('venda.CadastrarVenda',compact('produtos', 'clientes'));
	}

	public function salvar(){
		$dados = Input::all();

		$venda = new Venda;
		$venda->data = date('Y-m-d');;
		$venda->cliente_id = $dados['cliente_id'];
		$venda->save();
		$prod = $dados['pro'];

		foreach($prod as $produto){
			$produtos = Produto::find($produto);
			$produtos->vendas()->attach($venda->id);
		}
		return Redirect::to('vendas');
	}

	public function editar($id){
		$venda = Venda::find($id);
		$produtos =Produto::all();
		$cliente = Cliente::all();
		return View::make('venda.atualizarVenda',compact('venda', 'produtos','cliente'));
	}

	public function atualizar($id){
		$dados = Input::all();
		$venda = Venda::find($id);

		$venda->data = $dados['data'];
		$venda->cliente_id = $dados['cliente_id'];
		$venda->update();

		return Redirect::to('vendas');
	}

	public function excluir($id){
		$venda = Venda::find($id);
		$produto = $venda->produtos;
		
		foreach($produto as $prod){
			$prod->vendas()->detach($id);
		}
		$venda->delete();
		return Redirect::to('vendas');
	}
}
