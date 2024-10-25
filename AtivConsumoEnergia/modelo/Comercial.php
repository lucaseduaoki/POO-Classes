<?php

    require_once("IConsumidorEnergia.php");

        class Comercial implements IConsumidorEnergia{
            private float $consumoComercial;


            function getValorFatura(){
                $valorComercial = $this-> consumoComercial *1.45;
                return $valorComercial;
            }

            /**
             * Get the value of consumoComercial
             */
            public function getConsumoComercial(): float
            {
                        return $this->consumoComercial;
            }

            /**
             * Set the value of consumoComercial
             */
            public function setConsumoComercial(float $consumoComercial): self
            {
                        $this->consumoComercial = $consumoComercial;

                        return $this;
            }
        }
