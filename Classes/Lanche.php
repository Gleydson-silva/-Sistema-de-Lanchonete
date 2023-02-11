<?php

require_once "Prato.php";
class Lanche extends Prato{


    private $molho;
    private $recheio;
    private $pao;

    public function __construct($nome, $preco, $validade, $peso, $molho, $recheio, $pao)
    {
        parent::__construct($nome, $preco, $validade, $peso);
        $this->setMolho($molho);
        $this->setRecheio($recheio);
        $this->setPao($pao);
        
    } 

    public function getMolho(){
        return $this->molho;
    }
    public function setMolho($m){
        $this->molho = $m;
    }

    public function getRecheio(){
        return $this->recheio;
    }
    public function setRecheio($r){
        $this->recheio = $r;
    }

    public function getPao(){
        return $this->pao;
    }
    public function setPao($p){
        $this->pao = $p;
    }
    
    
}



?>