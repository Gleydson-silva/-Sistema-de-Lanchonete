<?php

require_once "Prato.php";
class Pizza extends Prato{


    private $molho;
    private $recheio;
    private $borda;

    public function __construct($nome, $preco, $validade, $peso, $molho, $recheio, $borda)
    {
        parent::__construct($nome, $preco, $validade, $peso);
        $this->setMolho($molho);
        $this->setRecheio($recheio);
        $this->setBorda($borda);
        
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

    public function getBorda(){
        return $this->borda;
    }
    public function setBorda($b){
        $this->borda = $b;
    }
    
    
}



?>