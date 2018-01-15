<?php

class Venda extends Eloquent{
    protected $table = 'vendas';
    public $timestamps=false;

    public function produtos()
    {
    	return $this->belongsToMany('Produto', 'venda_produto');
    }

    public function cliente(){
    	return $this->belongsTo('Cliente');
    } 
    public function vendaprodutos(){
    	return $this->hasMany('Vendaproduto');
    }
}
   

