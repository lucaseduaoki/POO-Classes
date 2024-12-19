<?php 

require_once('Funcionario.php');

class Estagiario extends Funcionario{

    public function calcularVencimento()
    {
        $calcularEstagiario = $this->salarioBase * 0.8;
        echo "O funcionário {$this->nome}, cargo {$this->getCargo()}, possui salário de R$ " . number_format($calcularEstagiario, 2, ',', '.') . ".\n";    }

        public function getCargo() {
            return "Estagiario";
        }
}
