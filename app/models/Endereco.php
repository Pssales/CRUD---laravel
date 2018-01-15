<?php

Class Endereco extends Eloquent{

	public $table= 'enderecos';
	public $timestamps=false;

	public function cliente(){
		return $this->belongsTo('Cliente');
	}
}