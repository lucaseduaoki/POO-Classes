<?php

require_once('modelo/Espaco.php');
require_once('modelo/Hotel.php');
require_once('modelo/Restaurante.php');
require_once('modelo/PontoTuristico.php');


$espacos = array();

function cadastrarEspaco() {
    echo "CADASTRAR ESPAÇO";
    print("╔═══════════════ ESPAÇO ══════════════╗\n");
    print("║     O que deseja fazer?             ║\n");
    print("║ 1: Hotel                            ║\n");
    print("║ 2: Restaurante                      ║\n");
    print("║ 3: Ponto Turístico                  ║\n");
    print("║ 0: Cancelar                         ║\n");
    print("╚═════════════════════════════════════╝\n");

    $espacoEscolha = readline("Qual tipo de espaço deseja cadastrar: ");

    if ($espacoEscolha = 1) {
        $hotel = new Hotel();
        $hotel->setNome(readline("Nome: "))
              ->setEndereco(readline("Endereço: "));
        $hotel->setNumEstrelas(readline("Estrelas: "));

        $cafeIncluso = readline("Café incluso (S/N): ");
        if ($cafeIncluso == "S" || $cafeIncluso == "s") {
            $hotel->setCafeIncluso(true);
        } else {
            $hotel->setCafeIncluso(false);
        }
        array_push($espacos, $hotel);
    }

    elseif ($espacoEscolha = 2){
        $restaurante = new Restaurante();
        $restaurante->setNome(readline("Nome: "))
                    ->setEndereco(readline("Endereço: "));
        $restaurante->setTipoComida(readline("Tipo de comida: "));
        array_push($espacos, $restaurante);
    }

    elseif ($espacoEscolha = 3){
        $pontoTuristico = new PontoTuristico();
        $pontoTuristico->setNome(readline("Nome: "))
                        ->setEndereco(readline("Endereço: "));
        $pontoTuristico->setDuracaoVisita(readline("Duração da visita: "));
        array_push($espacos, $pontoTuristico);
    }
}



while(true){
    print("╔══════════════Menu══════════════╗\n");
    print("║     O que deseja fazer?        ║\n");
    print("║ 1: Cadastrar Espaço            ║\n");
    print("║ 2: Excluir Espaço              ║\n");
    print("║ 3: Listar Espaços              ║\n");
    print("║ 0: Encerrar o pragrama         ║\n");
    print("╚════════════════════════════════╝\n");

    $num = readline("");
    switch($num){
        case 1:
            
            break;
        case 2:
            
            break;
        case 3: 
        
            break;
        case 0:
            
            break;
        default: 
        
    }
}
?>



