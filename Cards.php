<?php

class Carta{

    private int $numero;
    private string $nome;

    private string $naipe;

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNaipe(): string
    {
        return $this->naipe;
    }

    public function setNaipe(string $naipe): self
    {
        $this->naipe = $naipe;

        return $this;
    }

}



function sortearCarta($baralho){
    $cartaSorteada = $baralho[array_rand($baralho)];
    return $cartaSorteada;
}

$frances = [
        "Paus" => array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Valete", "Dama", "Reis"),
        "Ouro" => array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Valete", "Dama", "Reis"),
        "Espada" => array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Valete", "Dama", "Reis"),
        "Copas" => array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Valete", "Dama", "Reis"),
];





$baralho = array();
$cartaSorteada = null;

//Gerar o baralho de cartas e a carta sorteada
do{
    echo "\n";
    echo str_repeat("=", 42) . "\n";
    echo "      BEM-VINDO AO JOGO DE ADIVINHAÇÃO      \n";
    echo str_repeat("=", 42) . "\n";
    echo "          1 - Baralho Francês (tradcicional)\n";
    echo "          0 - Encerrar o Programa\n";
    echo str_repeat("=", 42) . "\n";

    $escolha = readline("Escolha uma opção: ");
    echo "\n";

    switch ($escolha) {
        case 0:
            echo "Encerrando o programa...\n";
            break;

        case 1:
            echo "BARALHO FRANCÊS\n";
            $i=1;
            foreach($frances as $naipe => $cartasDoNaipe){
                foreach($cartasDoNaipe as $c){
                    $carta = new Carta();
                    $carta->setNumero($i);
                    $carta->setNaipe($naipe);
                    $carta->setNome($c);

                    $i++;

                    array_push($baralho, $carta);
                }
            }
            foreach($frances as $naipe => $n){
                $valoresGeral = implode (", ", $n);
                echo $naipe . " -> " . $valoresGeral . "\n";
            }
            $cartaSorteada = sortearCarta($baralho);
            echo "A carta foi sorteada tente adivinhá-la!!";
            break;

        default:
            echo "OPÇÃO INVÁLIDA! TENTE NOVAMENTE\n";
            break;
    }
}while($escolha != 0);

//Rotina para a advinhação da carta

