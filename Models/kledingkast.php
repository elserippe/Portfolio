<?php

class Kledingkast {
   
    public $type;
    public $naam;
    private $Collectie;    
   
    public function __construct($typeParameter,$naamParameter){
        $this->type = $typeParameter;
        $this->naam = $naamParameter;
    }

    public function setCollectie($CollectieParameter){
        $this->Collectie = $CollectieParameter;
    }

    public function getCollectie(){
        return $this->Collectie;
    }
}


?>