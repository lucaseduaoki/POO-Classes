<?php
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");
require_once("modelo/Residencial.php");

do {
    echo "===============================\n";
    echo "=           MENU              =\n";
    echo "===============================\n";
    echo "= 1. Consumo Residencial    ===\n";
    echo "= 2. Consumo Comercial      ===\n";
    echo "= 3. Consumo Industrial     ===\n";
    echo "= 0. Sair                   ===\n";
    echo "===============================\n";
    echo "Selecione uma opção: ";

    $opcao = readline("Escolha a função desejada (0 para encerrar): ");
    
    switch ($opcao) {
        case 0:
            echo "Encerrando o programa...\n";
            break;
        case 1:
            $consumo1 = new Residencial();
            $consumo1->setConsumoDiario(readline("Digite o consumo diário de energia: "));
            echo "Seu gasto diário é de R$ " . $consumo1->getValorFatura() . " \n";
            break;
        case 2:
            $consumo = new Comercial();
            $consumo->setConsumoComercial(readline("Informe o seu consumo diário de energia: "));
            echo "Seu gasto diário é de R$ " . $consumo->getValorFatura() . " \n";
            break;
        case 3:
            $consumo = new Industrial();
            $consumo->setConsumoDiario(readline("Digite o consumo diário de energia: "));
            echo "Seu gasto diário é de R$ " . $consumo->getValorFatura() . " \n";
            break;
        default:
            echo "*** Opção não reconhecida! Por favor, tente novamente. ***\n";
            break;
    }

} while ($opcao);
?>
