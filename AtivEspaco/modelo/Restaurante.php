<?php 

require_once('Espaco.php');

class Restaurante extends Espaco{

    private string $tipoComida;

    public function getDadosRestaurante() { 
        $dados = "RESTAURANTE\n";
        $dados .= $this -> getDadosEspaco();
        $dados .= "Tipo de comida: ". $this->getTipoComida(). "\n";

        return $dados;
    }

    /**
     * Get the value of tipoComida
     */
    public function getTipoComida(): string
    {
        return $this->tipoComida;
    }

    /**
     * Set the value of tipoComida
     */
    public function setTipoComida(string $tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }

}<?php 

require_once('Espaco.php');

class Restaurante extends Espaco{

    private string $tipoComida;

    public function getDadosRestaurante() { 
        $dados = "RESTAURANTE\n";
        $dados .= $this -> getDadosEspaco();
        $dados .= "Tipo de comida: ". $this->getTipoComida(). "\n";

        return $dados;
    }

    /**
     * Get the value of tipoComida
     */
    public function getTipoComida(): string
    {
        return $this->tipoComida;
    }

    /**
     * Set the value of tipoComida
     */
    public function setTipoComida(string $tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }

}
