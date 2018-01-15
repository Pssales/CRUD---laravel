<?php

class Produto extends Eloquent{
    protected $table = 'produtos';
    public $timestamps=false;

    public function vendas(){
    	return $this->belongsToMany('Venda', 'venda_produto');
    }
    public function vendaprodutos(){
    	return $this->hasMany('Vendaproduto');
    }
}