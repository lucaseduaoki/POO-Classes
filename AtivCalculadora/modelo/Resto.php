<?php

require_once("Calculadora.php");

class Resto extends Calculadora{

    public function calcular(){
        $restar = $this->numA % $this->numB;
        echo "Resultado: " . $restar;
    }

}
