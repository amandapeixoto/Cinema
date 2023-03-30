<?php

class Ingresso{
    public $ingresso;
    public $sala;
    public $filme;
    public $cliente;

    public function __construct($ingresso, $sala, $filme, $cliente){
        $this->ingresso = $ingresso;
        $this->sala = $sala;
        $this->filme = $filme;
        $this->cliente = $cliente;
    }

    public function setIngresso ($ingresso){
        $this->ingresso = $ingresso;
    }

    public function getIngresso (){
        return $this->ingresso;
    }

    public function setSala ($sala){
        $this->sala = $sala;
    }

    public function getSala (){
        return $this->sala;
    }

    public function setFilme ($filme){
        $this->filme = $filme;
    }

    public function getFilme (){
        return $this->filme;
    }

    public function setCliente ($cliente){
        $this->cliente = $cliente;
    }

    public function getCliente (){
        return $this->cliente;
    }
}