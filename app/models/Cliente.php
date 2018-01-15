<?php

class Cliente  extends Eloquent{
    protected $table = 'clientes';
    public $timestamps=false;

    public function endereco(){
    	return $this->hasOne('Endereco');
    }

    public function vendas(){
    	return $this->hasMany('Venda');
    }
}