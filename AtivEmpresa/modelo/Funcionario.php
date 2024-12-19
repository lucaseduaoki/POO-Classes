<?php 

abstract class Funcionario{

    protected string $nome;
    protected int $salarioBase; 

    public abstract function calcularVencimento();

    public abstract function getCargo();

    public function __construct()
    {
        $this->salarioBase = 1500;
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
     * Get the value of salarioBase
     */
    public function getSalarioBase(): int
    {
        return $this->salarioBase;
    }

    /**
     * Set the value of salarioBase
     */
    public function setSalarioBase(int $salarioBase): self
    {
        $this->salarioBase = $salarioBase;

        return $this;
    }
}
