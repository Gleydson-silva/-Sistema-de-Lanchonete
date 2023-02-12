<?php

class Pedido{

    private $nomeCliente;
    private $taxaDeServico;
    private $itensConsumidos;


    public function __construct($nome)
    {
        $this->setNomeCliente($nome);
        $this->itensConsumidos = array();
    }
    public function calcularTotal(){
        $total = 0;

        for($i = 0; $i < count($this->getItensConsumidos()); $i++){
            $total += $this->itensConsumidos[$i]->getPrecoVenda();
            
        } 

        
        return $total;
    }
    public function mostrarFatura($valorPago){

        $pedidos = $this->calcularTotal();
        $taxa =  $this->getTaxaDeServico();
        $total = $pedidos + $taxa;

        if($valorPago >= $total){
            $troco = $valorPago - $total;

            echo "<br> --------- Total Fatura ------- <br>";
            echo "Valor da conta R$" . $pedidos . "<br>";
            echo "A taxa de serviço deu R$" . $taxa . "<br>";
            echo "Valor final R$" . $total . "<br>";
            echo "Valor pago foi R$". $valorPago. " resultando em um troco de R$". $troco . "<br>";
        }else{
            echo "<br> --------- Total Fatura ------- <br>";
            echo "Valor da conta R$" . $pedidos . "<br>";
            echo "A taxa de serviço deu R$" . $taxa . "<br>";
            echo "Valor final R$" . $total . "<br>";
            echo "Valor pago não foi suficiente para quitar a conta!! <br>";
        }
       


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
        array_push ($this->itensConsumidos, $i);
    }




}


?>