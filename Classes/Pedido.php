<?php

class Pedido{

    private $nomeCliente;
    private $taxaDeServico;
    private $itensConsumidos;


    public function __construct($nome)
    {
        $this->setNomeCliente($nome);
    }
    public function calcularTotal(){

       

        return $this->itensConsumidos;
    }
    public function mostrarFatura(){
        echo "--------- Total Fatura ------- <br>";
        echo "Valor da conta: " . $this->calcularTotal() . "<br>";
        echo "A taxa de serviço deu : " . $this->getTaxaDeServico() . "<br>";
        echo "Valor final : " . ($this->taxaDeServico + $this->calcularTotal()) . "<br>";


    }

    public function getNomeCliente(){
        return $this->nomeCliente;
    }
    public function setNomeCliente($n){
        $this->nomeCliente = $n;
    }

    public function getTaxaDeServico(){

        $this->taxaDeServico = $this->calcularTotal() * 0.1;
        return $this->taxaDeServico;;
    }
    public function setTaxaDeServico($t){
        $this->taxaDeServico = $t;
    }

    public function getItensConsumidos(){
        return $this->itensConsumidos;
    }
    public function setItensConsumidos($i){

        $this->itensConsumidos += $i;
    }




}


?>