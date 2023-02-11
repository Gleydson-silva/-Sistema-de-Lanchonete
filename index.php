<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        
        require_once "Classes/Pedido.php";
        require_once "Classes/Pizza.php";
        require_once "Classes/Lanche.php";


        $cliente1 = new Pedido("Alexandre");
        $p1[0] = new Pizza("Pizza de Clabresa", 100, "20/05/2023", "2Kg", "Molho de Tomate", "Calabresa", "Recheada");
        $p1[1] = new Pizza("Pizza de Muçarela", 100, "05/07/2023", "1.5Kg", "Molho de Tomate", "Muçarela", "Borda não recheada");
        $p1[2] = new Lanche("X-Tudo", 40, "05/08/2023", "1.5Kg", "Todos", "X-tudo", "Frances");

        $cliente1 -> setItensConsumidos($p1[0] -> getPrecoVenda());
        $cliente1 -> setItensConsumidos($p1[1] -> getPrecoVenda());
        $cliente1 -> setItensConsumidos($p1[2] -> getPrecoVenda());



        $cliente1 -> mostrarFatura();
        
        ?>
    </pre>
</body>
</html>