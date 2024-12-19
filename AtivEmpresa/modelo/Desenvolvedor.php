<?php 

require_once('Funcionario.php');

class Desenvolvedor extends Funcionario{

    public function calcularVencimento()
    {
        $calcularDev= $this->salarioBase * 2.3;
        echo "O funcionário {$this->nome}, cargo {$this->getCargo()}, possui salário de R$ " . number_format($calcularDev, 2, ',', '.') . ".\n";
    }

    public function getCargo() {
        return "Desenvolvedor";
    }

}
