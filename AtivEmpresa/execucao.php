<?php

require_once('modelo/Funcionario.php');
require_once('modelo/Gerente.php');
require_once('modelo/Desenvolvedor.php');
require_once('modelo/Estagiario.php');


while(true){

    print("╔══════════════Menu══════════════╗\n");
    print("║     Qual cargo deseja          ║\n");
    print("║ 1: Gerente                     ║\n");
    print("║ 2: Desenvolvedor               ║\n");
    print("║ 3: Estagiário                  ║\n");
    print("║ 0: Sair do Programa            ║\n");
    print("╚════════════════════════════════╝\n");

    $num = readline("");
    switch($num){
        case 1:
            $gerente = new Gerente;
            $gerente->setNome(readline("Nome Gerente: "));
            $gerente->getCargo();
            $gerente->calcularVencimento();

            echo "\n";
            break;

        case 2:
            $desenvolvedor = new Desenvolvedor;
            $desenvolvedor->setNome(readline("Nome Desenvolvedor: "));
            $desenvolvedor->getCargo();
            $desenvolvedor->calcularVencimento();

            echo "\n";
            break;

        case 3: 
            $estagiario = new Estagiario;
            $estagiario->setNome(readline("Nome Estagiario: "));
            $estagiario->getCargo();
            $estagiario->calcularVencimento();

            echo "\n";
            break;

        case 4: 
            echo "Programa encerrado.\n";
            echo "\n";
            break;

        default: 
        echo "Opção inválida! Tente novamente...";
    }
}
?>
