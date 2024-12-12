<?php

require_once("Calculadora.php");

class Soma extends Calculadora{

    public function calcular(){
        $somar = $this->numA + $this->numB;
        echo "Resultado: " . $somar;
    }

}
