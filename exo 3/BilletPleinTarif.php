<?php
Class BilletPleinTarif{
     private int $numero;
     private float $prix;
     private seance $Seance;

   public function __construct(int $newNumero,float $newPrix, seance $NewSeance ){
        $this -> numero=$newNumero;
        $this-> prix=$newPrix;
        $this-> Seance=$NewSeance;
   }

   public function calculerPrix(): float{
       return $this->prix;
   }

   public function imprimerDetail():void{
      echo "<p>Affiche détails {$this->Seance} et numero de billet  {$this-> numero}</p>";
      }


   }


 


















?>