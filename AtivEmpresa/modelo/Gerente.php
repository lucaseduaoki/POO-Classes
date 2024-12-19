<?php 

require_once('Funcionario.php');

class Gerente extends Funcionario{

    public function calcularVencimento()
    {
        $calcularGerente = $this->salarioBase* 4.5;
        echo "O funcionário {$this->nome}, cargo {$this->getCargo()}, possui salário de R$ " . number_format($calcularGerente, 2, ',', '.') . ".\n";
    }

    public function getCargo() {
        return "Gerente";
    }
}
