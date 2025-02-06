<?php

require_once("Produto.php");

class Filme extends Produto {
    private int $tempoDuracao;
    private string $continuidade;
    private string $cinema;
    private string $uniFisica;

    public function getDadosProduto(){
        
        $dados = "Filme: ".$this ->getNome()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Data de lançamento: ".$this->getDataLanc()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Classificação indicativa: ". $this->getClassIndicativa()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Diretor: ". $this->getDiretor()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Gênero: ".$this-> getGenero()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Adaptação de livro: ".$this -> getAdptLivro()."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Tempo de duração: ".$this->tempoDuracao."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Continuidade: ". $this->continuidade ."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Passou no cinema: ". $this->cinema ."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Está disponível em meio físico: ". $this->uniFisica."\n";
        $dados .="-----------------------------------------------------------------\n";
        $dados .= "Está disponível em meio web: ". $this->getDispoWeb() ."\n\n";
        return $dados;
    }



    /**
     * Get the value of tempoDuracao
     */
    public function getTempoDuracao(): int
    {
        return $this->tempoDuracao;
    }

    /**
     * Set the value of tempoDuracao
     */
    public function setTempoDuracao(int $tempoDuracao): self
    {
        $this->tempoDuracao = $tempoDuracao;

        return $this;
    }

    /**
     * Get the value of continuidade
     */
    public function getContinuidade(): string
    {
        return $this->continuidade;
    }

    /**
     * Set the value of continuidade
     */
    public function setContinuidade(string $continuidade): self
    {
        $this->continuidade = $continuidade;

        return $this;
    }

    /**
     * Get the value of cinema
     */
    public function getCinema(): string
    {
        return $this->cinema;
    }

    /**
     * Set the value of cinema
     */
    public function setCinema(string $cinema): self
    {
        $this->cinema = $cinema;

        return $this;
    }

    /**
     * Get the value of uniFisica
     */
    public function getUniFisica(): string
    {
        return $this->uniFisica;
    }

    /**
     * Set the value of uniFisica
     */
    public function setUniFisica(string $uniFisica): self
    {
        $this->uniFisica = $uniFisica;

        return $this;
    }
}
