<?php 

Class ProdutoController extends BaseController{

	public function produto(){
		$produtos = Produto::all();
		return View::make('produto.telaProduto',compact('produtos'));
	}

	public function cadastrar(){
		return View::make('produto.CadastrarProduto');
	}

	public function salvar(){
		$dados = Input::all();
		$produto = new Produto;
		$produto->preco = $dados['preco'];
		$produto->nome = $dados['nome'];
		$produto->save();

		return Redirect::to('produtos');
	}

	public function editar($id){
		$produto = Produto::find($id);
		return View::make('produto.atualizarProduto',compact('produto'));

	}

	public function atualizar($id){

		$dados= Input::all();
		$prod = Produto::find($id);
		$prod->preco = $dados['preco'];
		$prod->nome = $dados['nome'];

		$prod->update();
		
		return Redirect::to('produtos');
	}

	public function excluir($id){
		$produto = Produto::find($id);
		$vendas = $produto->vendas;

		foreach($vendas as $venda){
			$v_id = Venda::where('id','=',$venda->id)->first();
			$venda->produtos()->detach($id);
			$vp= $v_id->vendaprodutos;
			echo $vp;
			if(count($vp)==0){
				$v_id->delete();
			}
		}
		$produto->delete();
		return Redirect::to('produtos');
	}
}