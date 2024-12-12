<?php

require_once("Calculadora.php");

class Subtracao extends Calculadora{

    public function calcular(){
        $subtrair = $this->numA - $this->numB;
        echo "Resultado: " . $subtrair;
    }

}
