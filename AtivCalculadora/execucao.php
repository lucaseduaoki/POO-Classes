<?php

require_once("modelo/Calculadora.php");
require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");
require_once("modelo/Multiplicacao.php");
require_once("modelo/Divisao.php");
require_once("modelo/Resto.php");

$numA = 1;
$numB = 1;

while(true){

    echo "Defina os valores do 1° e 2° número\n";
    $numA = readline("Número A: ");
    $numB = readline("Número B: ");

    if ($numA == 0 && $numB == 0) {
        echo "\nEncerrando programa...\n";
        break;
    }


    print("╔══════════════Menu══════════════╗\n");
    print("║     O que deseja fazer?        ║\n");
    print("║ 1: Somar                       ║\n");
    print("║ 2: Subtrair                    ║\n");
    print("║ 3: Multiplicar                 ║\n");
    print("║ 4: Dividir                     ║\n");
    print("║ 5: Resto                       ║\n");
    print("╚════════════════════════════════╝\n");

    $num = readline("");
    switch($num){
        case 1:
            $soma = new Soma;
            $soma->setNumA($numA);
            $soma->setNumB($numB);
            $soma->calcular();
            echo "\n";
            break;

        case 2:
            $subtracao = new Subtracao;
            $subtracao->setNumA($numA);
            $subtracao->setNumB($numB);
            $subtracao->calcular();
            echo "\n";
            break;

        case 3: 
            $multiplicacao = new Multiplicacao;
            $multiplicacao->setNumA($numA);
            $multiplicacao->setNumB($numB);
            $multiplicacao->calcular();
            echo "\n";
            break;

        case 4: 
            $divisao = new Divisao;
            $divisao->setNumA($numA);
            $divisao->setNumB($numB);
            $divisao->calcular();
            echo "\n";
            break;

        case 5: 
            $resto = new Resto;
            $resto->setNumA($numA);
            $resto->setNumB($numB);
            $resto->calcular();
            echo "\n";
            break;

        default: 
        echo "Opção inválida! Tente novamente...";
    }
}
?>
