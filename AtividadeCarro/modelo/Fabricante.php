<?php
class Fabricante{
    private string $nome;
    private string $sigla;

    public function __construct($nome, $sigla)
    {
        $this->nome = $nome;
        $this->sigla = $sigla;
    }

    /**
     * Get the value of name
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of name
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of acronym
     */
    public function getSigla(): string
    {
        return $this->sigla;
    }

    /**
     * Set the value of acronym
     */
    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }
}
?>
