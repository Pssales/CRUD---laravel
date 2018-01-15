<?php

class Vendaproduto extends Eloquent{
    protected $table = 'venda_produto';
    public $timestamps=false;

    public function produto(){
    	return $this->belongsTo('Produto');
    }

    public function venda(){
    	return $this->belongsTo('Venda');
    } 
}
