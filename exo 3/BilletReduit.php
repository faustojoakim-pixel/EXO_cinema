<?php
class BilletReduit extends BilletPleinTarif{
    private string $justificatif;


public function __construct(int $newPrix){
    $this->justificatif=$newPrix;
}

public function calculerPrix(): float{
       return $this->Newprix($this->prix*0.30);
   }





}


?>