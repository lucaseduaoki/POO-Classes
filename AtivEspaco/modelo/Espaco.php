<?php 

class Espaco{

    protected string $nome;
    protected string $endereco;

    public function getDadosEspaco() { 
        $dados = "Nome: ". $this->getNome(). "\n";
        $dados .= "Endereço: ". $this->getEndereco(). "\n";
        return $dados;
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
     * Get the value of endereco
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
}
