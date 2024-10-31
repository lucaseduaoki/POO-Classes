<?php

require_once('Pessoa.php');

class Professor extends Pessoa{
    private float $salario;

    public function __toString(){
        $dados = "Nome: " . $this->nome;
        $dados .= " | RG: " . $this->rg;
        $dados .= " | Idade: " . $this->idade;
        $dados .= " | Matrícula: " . $this -> getSalario();
        
        return $dados;
    }


    /**
     * Get the value of salario
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}
