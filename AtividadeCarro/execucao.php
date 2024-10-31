<?php
require_once("modelo/Fabricante.php");
require_once("modelo/Carro.php");

$carros = [];
$facturer = [
    new Fabricante("Volkswagem", "VW"),
    new Fabricante("Chevrolet", "GM"),
    new Fabricante("Fiat", "F"),
    new Fabricante("Renault", "RN"),
];

function Cadastro($facturer){
    $carro = new Car;

    $fabricante = null;
    $sigla = readline("Informe a sigla do fabricante: \n");

    foreach ($facturer as $fab) {
        if($fab->getSigla() === $sigla){
            $fabricante = $fab;
            $carro->setModelo(readline("Qual o modelo do carro? \n"))->setAnoFabricacao(readline("Qual o ano de fabricação? \n"))->setFabricante($fabricante);

        return $carro;
        }
    }
    print("Fabricante não encontrado!!!\n");
    return null;
}

function listar($carros){
    foreach($carros as $car){
        if($car !== null){
            for ($i = 1; $i<count($carros)+1; $i++){
                echo "Carro $i.\n";
            print("Fabricante: ". $car->getFabricante()->getNome() ."\n");
            print("Ano de Fabricação:". $car->getAnoFabricacao() ."\n");
            print("Modelo: ". $car->getModelo() ."\n\n");
            }
        }
    }
}

while(true){
    print("╔══════════════Menu═══════════╗\n");
    print("║     O que deseja fazer?     ║\n");
    print("║ 1: Adicionar Carro          ║\n");
    print("║ 2: Excluir Carro            ║\n");
    print("║ 3: Listar Carros            ║\n");
    print("║ 0: Encerrar o pragrama      ║\n");
    print("╚═════════════════════════════╝\n");

    $num = readline("");
    switch($num){
        case 1:
            print("Escolhas um dessas fabricantes!!! \n\n");
            foreach ($facturer as $fab) {
                print("Fabricante: ". $fab->getNome() ." | Sigla: ". $fab->getSigla() ."\n");
            }
            print("\n");
            if(true){
            array_push($carros, Cadastro($facturer));
            }
            break;
        case 2:
            if(count($carros)>0){
                $i=1;

                print("Qual número você vai querer remover?\n");
                foreach($carros as $c){
                    if($c !== null){
                        print($i.")".$c->getModelo()." | ". $c->getAnoFabricacao() ."\n");
                        $i++;
                    }
                }
                $num=readline("");
                $num = $num - 1;
                
                if ($num <= count($carros)) {
                    array_splice($carros, $num, 1);
                    print("Removido com sucesso!\n");
                    break;
                } else {
                    print("Número inválido! Não foi possível remover.\n");
                }
                break;
            }else {
                print("Não tem carros cadastrados para excluir!!!\n");
                break;
            }
        case 3: 
            if(count($carros)>0){
                echo ("Listando carros: \n");
                listar($carros);
                break;
            } else {
                print("Não tem carros cadastrados!!!\n");
                break;
            }
        case 0:
            print("Programa encerrado...\n");
            return true;
        
        default: 
            print("Opção invalida!\n");

    }
}
?>
