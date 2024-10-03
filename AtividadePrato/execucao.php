<?php 

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$pratos = [
    new Prato(1, "Camarão à Milanesa", 110.00),
    new Prato(2, "Pizza Margherita", 80.00),
    new Prato(3, "Macarrão à Bolonhesa", 60.00),
    new Prato(4, "Bife à Parmegiana", 75.00),
    new Prato(5, "Risoto ao Funghi", 70.00),
];

$pedidos = [];
$valorTotal = 0;
$option = 0;

while(true){
    print("\n╔══════════════Menu═══════════╗\n");
    print("║     O que deseja fazer?     ║\n");
    print("║ 1: Cadastrar                ║\n");
    print("║ 2: Cancelar                 ║\n");
    print("║ 3: Listar                   ║\n");
    print("║ 4: Total de Vendas          ║\n");
    print("║ 0: Encerrar o pragrama      ║\n");
    print("╚═════════════════════════════╝\n\n");

    $num = readline("Opção: ");
    switch($num){
        case 1:
            $nameCliente = readline("Nome do cliente: ");
            $nameGarcom = readline("Nome do garçom: ");
            
            echo"\n\n";
            print("╔════════════════════Tabela Pratos═════════════════════╗\n");
            print("║ Número ║              Nome             ║  Valor(R$)  ║\n");
            print("║═════════════════════════════════════════════════════ ║\n");
            print("║   1    ║        Camarão à Milanesa     ║  R$110      ║\n");
            print("║   2    ║        Pizza Margherita       ║  R$80       ║\n");
            print("║   3    ║        Macarrão à Bolonhesa   ║  R$60       ║\n");
            print("║   4    ║        Bife à Parmegiana      ║  R$75       ║\n");
            print("║   5    ║        Risoto ao Funghi       ║  R$70       ║\n");
            print("╚══════════════════════════════════════════════════════╝\n\n");

            $numPrato = readline("Número do prato (1 ao 5): ");
            foreach($pratos as $p){
                if($p->getNumero() == $numPrato){
                    $prato = $p;
                }
            }

            $pedido1 = new Pedido();
            $pedido1 -> setNome($nameCliente)
                     -> setGarcom($nameGarcom)
                     -> setPrato($prato);

            array_push($pedidos, $pedido1);
            break;

        case 2:
            if(count($pedidos) > 0){  
                foreach($pedidos as $key => $p){
                    echo "Pedido " . ($key + 1) . " | " . $p->getNome() . " | " . $p->getPrato()->getNome() . "\n";
                }
                
                $option = readline("\nNúmero do pedido a ser cancelado: ");
                $option = $option - 1;

                if($option <= count($pedidos)){
                    array_splice($pedidos, $option, 1);
                    echo "Pedido removido com sucesso\n";
                    break;
                }
                else{
                    echo "Número inválido!!! Não foi possível remover.\n";
                }
            }
            else{
                "Não há pedidos cadastrados\n";
            } 
            break;


        case 3: 
            if(count($pedidos) > 0){      
                foreach($pedidos as $p){
                    echo $p;
                }
            }
            else{
                echo "Não há pedidos cadastrados\n";
            } 
            break;



        case 4: 
            if(count($pedidos) > 0){      
                foreach($pedidos as $p){
                    $valorTotal += $p->getPrato()->getValor();
                 }
     
                 echo "Valor total de todos os pedidos: R$" . $valorTotal;
                 echo "\n";
            }
            else{
                "Não há pedidos cadastrados\n";
            } 
            break; 

        case 0:
            print("Programa encerrado...\n");
            return true;
            break;

        default: 
            print("Opção invalida!\n");

    }
}
?>
