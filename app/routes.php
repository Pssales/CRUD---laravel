<?php


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login', function(){
	return View::make('login');
});


Route::get('produtos', 'ProdutoController@produto');

Route::get('produto/cadastrar','ProdutoController@cadastrar');

Route::post('produtos/salvar','ProdutoController@salvar');

Route::get('produtos/editar/{id}' ,'ProdutoController@editar');

Route::post('produtos/atualizar/{id}', 'ProdutoController@atualizar');

Route::get('produto/excluir/{id}', 'ProdutoController@excluir');



Route::get('clientes', 'ClienteController@clientes');

Route::get('clientes/cadastrar','ClienteController@cadastrar');

Route::post('clientes/salvar','ClienteController@salvar');

Route::get('clientes/editar/{id}', 'ClienteController@editar');

Route::post('clientes/atualizar/{id}', 'ClienteController@atualizar');

Route::get('clientes/excluir/{id}', 'ClienteController@excluir');



Route::get('vendas', 'VendaController@vendas');

Route::get('vendas/cadastrar', 'VendaController@cadastrar');

Route::post('vendas/salvar','VendaController@salvar');

Route::get('vendas/editar/{id}', 'VendaController@editar');

Route::post('vendas/atualizar/{id}', 'VendaController@atualizar');

Route::get('vendas/excluir/{id}', 'VendaController@excluir');