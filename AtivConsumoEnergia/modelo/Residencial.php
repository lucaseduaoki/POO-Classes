<?php

require_once("IConsumidorEnergia.php");

    class Residencial implements IConsumidorEnergia{
        private float $consumoDiario;
        
        public function getValorFatura(){
            $valorResidencial = $this-> consumoDiario * 1.05;
            return $valorResidencial;
        }

        /**
         * Get the value of consumoDiario
         */
        public function getConsumoDiario(): float
        {
                return $this->consumoDiario;
        }

        /**
         * Set the value of consumoDiario
         */
        public function setConsumoDiario(float $consumoDiario): self
        {
                $this->consumoDiario = $consumoDiario;

                return $this;
        }
    }
