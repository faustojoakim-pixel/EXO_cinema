<?php
class BilletEnfant extends BilletPleinTarif{
    private int $age;


public function __construct(int $newAge){
    $this->age=$newAge;
}

public function getAge():int{
    return $this->age;
}

public function setAge(int $newAge): void{
    $this ->age=$newAGE;
}

public function calculerPrix(age $newAge):age  | int{
    if ($this->getAge() > 5){
        return $this->prix = (5);
    }
       
   }





}








?>