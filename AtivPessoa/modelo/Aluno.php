<?php

require_once('Pessoa.php');

class Aluno extends Pessoa{
    private int $matricula;
    

    public function __toString(){
        $dados = "Nome: " . $this->nome;
        $dados .= " | RG: " . $this->rg;
        $dados .= " | Idade: " . $this->idade;
        $dados .= " | Matrícula: " . $this -> getMatricula();
        
        return $dados;
    }

    /**
     * Get the value of matricula
     */
    public function getMatricula(): int
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula(int $matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}
