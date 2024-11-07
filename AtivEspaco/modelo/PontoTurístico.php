<?php 

require_once('Espaco.php');

class PontoTuristico extends Espaco{

   private int $duracaoVisita;
   
   public function getDadosPontoTuristico(){
     echo "Nome: ". $this->getNome(). "\n";
     echo "Endereço: ". $this->getEndereco(). "\n";
     echo "Duração da visita: ". $this->getDuracaoVisita(). " dias.\n";
   }


   /**
    * Get the value of duracaoVisita
    */
   public function getDuracaoVisita(): int
   {
      return $this->duracaoVisita;
   }

   /**
    * Set the value of duracaoVisita
    */
   public function setDuracaoVisita(int $duracaoVisita): self
   {
      $this->duracaoVisita = $duracaoVisita;

      return $this;
   }
}
