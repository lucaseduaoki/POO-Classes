<?php

require_once('modelo/Espaco.php');
require_once('modelo/Hotel.php');
require_once('modelo/Restaurante.php');
require_once('modelo/PontoTuristico.php');


$espacos = array();

function cadastrarEspaco(&$espacos) {
    echo "CADASTRAR ESPAÇO\n";
    print("╔═══════════════ ESPAÇO ══════════════╗\n");
    print("║     O que deseja fazer?             ║\n");
    print("║ 1: Hotel                            ║\n");
    print("║ 2: Restaurante                      ║\n");
    print("║ 3: Ponto Turístico                  ║\n");
    print("║ 0: Cancelar                         ║\n");
    print("╚═════════════════════════════════════╝\n");


    while (true) {  
        $espacoEscolha = readline("Qual tipo de espaço deseja cadastrar: ");


        if ($espacoEscolha == 1) {
            $hotel = new Hotel();
            $hotel->setNome(readline("Nome: "))
                ->setEndereco(readline("Endereço: "));
            $hotel->setNumEstrelas(readline("Número de estrelas: "));

            $cafeIncluso = readline("Café incluso (S/N): ");
            if ($cafeIncluso == "Sim" || $cafeIncluso == "sim") {
                $hotel->setCafeIncluso(true);
            } else {
                $hotel->setCafeIncluso(false);
            }
            array_push($espacos, $hotel);
            break;
        }

        elseif ($espacoEscolha == 2) {
            $restaurante = new Restaurante();
            $restaurante->setNome(readline("Nome: "))
                        ->setEndereco(readline("Endereço: "));
            $restaurante->setTipoComida(readline("Tipo de comida: "));
            array_push($espacos, $restaurante);
            break; 
        }

        elseif ($espacoEscolha == 3) {
            $pontoTuristico = new PontoTuristico();
            $pontoTuristico->setNome(readline("Nome: "))
                            ->setEndereco(readline("Endereço: "));
            $pontoTuristico->setDuracaoVisita(readline("Duração da visita: "));
            array_push($espacos, $pontoTuristico);
            break;
        }

        else {
            echo "Opção inválida! Tente novamente.\n";
        }
    }
}


function excluirEspaco(&$espacos){
    echo "EXCLUIR ESPAÇO";

    if(count($espacos) == 0){
        echo "Não há espacos cadastrados.\n";
        return;
    }

    else{
        foreach ($espacos as $chave => $esp){
            echo "$chave. Nome: ". $esp->getNome(). "\n";
        }

        $indiceExcluir = readline("Digite o índice do Espaço que deseja excluir: ");

        if (isset($espacos[$indiceExcluir])) {
            array_splice($espacos, $indiceExcluir, 1);
            echo "Espaço excluído com sucesso.\n";
        }
        else{
            echo "Índice do espaço não encontrado.\n";
        }
    }
}

function listarEspacos(&$espacos){
    if(count($espacos) == 0){
        echo "Não há espacos cadastrados.\n";
        return;
    }

    else{
        foreach($espacos as $e){
            if($e instanceof Hotel){
                $e -> getDadosHotel();
            }
            else if($e instanceof Restaurante){
                $e -> getDadosRestaurante();
            }
            else if($e instanceof PontoTuristico){
                $e -> getDadosPontoTuristico();
            }
            else{
                echo "Tipo de espaço desconhecido.\n";
            }
        }
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
            cadastrarEspaco($espacos);
            break;

        case 2:
            excluirEspaco($espacos);
            break;

        case 3: 
            listarEspacos($espacos);
            break;

        case 0:
            echo "Encerrendo programa";
            break;

        default: 
        echo "Opção inválida! Tente novamente...";
    }
}
?>





