<?php

require_once "ingresso.php";

class Cliente{
    public $nome;
    public $ingresso; 

    public function __construct($nome, $ingresso){
        $this->nome = $nome;
        $this->ingresso = $ingresso;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIngresso($ingresso){
        $this->ingresso = $ingresso;
    }

    public function getIngresso(){
        return $this->ingresso;
    }

    public function comprar(){
        echo "$this->nome comprou o ingresso";
    }
}

