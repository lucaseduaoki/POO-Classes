<?php

require_once("Calculadora.php");

class Divisao extends Calculadora{

    public function calcular(){
        $dividir = $this->numA / $this->numB;
        echo "Resultado: " . $dividir;
    }

}
