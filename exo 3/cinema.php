<?php
include_once 'seance.php';
include_once 'BilletPleinTarif.php';
include_once 'BilletReduit.php';
include_once 'BilletEnfant.php';

$film   = new Film('Dunesday');
$seance = new Seance('16/12/2026', '20h30', $film);

echo("<br><br>");
echo($seance->getFilm()->getTitre());
echo("<br><br>");
echo($seance->getDate());
echo("<br><br>");
echo($seance->getHeure();

public function __construct(int $newNumero,float $newPrix, seance $NewSeance, int $newAGE, string $justificatif){

$newSeance->setBilletAdulte(new BilletAdulte());
 $this->$newNumero=12;
 $this->newPrix=23.5;
 

$newSeance->setBilletEnfant(new BilletEnfant());
$this->newNumero=11;
$this->newPrix=5;
$this->age=9;


$newSeance->setBilletEtudiant(new BilletEtudiant());
$this->newNumero=42;
$this->newPrix=23.5;
$this->justificatif="carte etudiante";


public function calculerPrix(): float{
       return $this->newPrix;
   }

public function imprimerDetail():void{
      echo "<p>Affiche détails {$this->Seance} et numero de billet  {$this-> newNumero}</p>";
      }


}




?>


