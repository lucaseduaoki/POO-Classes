<?php

require_once("modelo/Fabricante.php");

class Car{
    private string $modelo;
    private int $anoFabricacao;
    private Fabricante $fabricante;
    

    /**
     * Get the value of modelo
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of anoFabricacao
     */
    public function getAnoFabricacao(): int
    {
        return $this->anoFabricacao;
    }

    /**
     * Set the value of anoFabricacao
     */
    public function setAnoFabricacao(int $anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    /**
     * Get the value of fabricante
     */
    public function getFabricante(): Fabricante
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     */
    public function setFabricante(Fabricante $fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }

}

  
