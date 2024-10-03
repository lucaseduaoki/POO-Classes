<?php

require_once("modelo/Prato.php");

class Pedido{

    private string $nome;
    private string $garcom;
    
    private Prato $prato;



    public function __toString()
    {
        return "O cliente " . $this->nome . " foi atendido pelo garçom " . $this->garcom .", pediu um prato de " 
        . $this->prato->getNome() . " no valor de R$" . $this->prato->getValor() . ".\n";
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

    /**
     * Get the value of garcom
     */
    public function getGarcom(): string
    {
        return $this->garcom;
    }

    /**
     * Set the value of garcom
     */
    public function setGarcom(string $garcom): self
    {
        $this->garcom = $garcom;

        return $this;
    }

    /**
     * Get the value of prato
     */
    public function getPrato(): Prato
    {
        return $this->prato;
    }

    /**
     * Set the value of prato
     */
    public function setPrato(Prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}
