<?php

require_once "Pedido.php";
class Prato extends Pedido{

    private $cliente;
    private $precoVenda;
    private $dataValidade;
    private $peso;


    public function __construct($cliente, $preco, $validade, $peso)
    {
        $this->setCliente($cliente);
        $this->setPrecoVenda($preco);
        $this->setDataValidade($validade);
        $this->setPeso($peso);
    }

    public function getCliente(){
        return $this->cliente;
    }
    public function setCliente($c){
        $this->cliente = $c;
    }

    public function getPrecoVenda(){
        return $this->precoVenda;
    }
    public function setPrecoVenda($p){
        $this->precoVenda = $p;
    }

    public function getDataValidade(){
        return $this->dataValidade;
    }
    public function setDataValidade($d){
        $this->dataValidade = $d;
    }

    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($p){
        $this->peso = $p;
    }

}


?>