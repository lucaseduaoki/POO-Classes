<?php

require_once("Calculadora.php");

class Multiplicacao extends Calculadora{

    public function calcular(){
        $multiplicar = $this->numA * $this->numB;
        echo "Resultado: " . $multiplicar;
    }

}
