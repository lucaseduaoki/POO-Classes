<?php

class Carta{

    private int $numero;
    private string $nome;


    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

do{
    echo str_repeat("=", 42) . "\n";
    echo "      BEM-VINDO AO JOGO DE ADIVINHAÇÃO      \n";
    echo str_repeat("=", 42) . "\n";
    echo "          1 - \n";
    echo "          2 - \n";
    echo "          3 - \n";
    echo "          4 - \n";
    echo "          5 - \n";
    echo "          0 - Encerrar o Programa\n";
    echo str_repeat("=", 42) . "\n";

    $escolha = readline("Escolha uma opção: ");
    echo "\n";

    switch ($escolha) {
        case 0:
            echo "Encerrando o programa...";
            break;

        case 1:
            
            break;
        
        case 2:
            
            break;
            
        case 3:
            
            break;

        case 4:
         
            break;

        case 5:
            
            break;

        default:
            echo "OPÇÃO INVÁLIDA! TENTE NOVAMENTE\n";
            break;
    }
}while($escolha != 0);
