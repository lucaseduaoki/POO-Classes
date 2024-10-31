<?php

class Pessoa{
    protected string $nome;
    protected string $rg;
    protected int $idade;

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
     * Get the value of rg
     */
    public function getRg(): string
    {
        return $this->rg;
    }

    /**
     * Set the value of rg
     */
    public function setRg(string $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}
