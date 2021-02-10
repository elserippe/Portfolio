<?php
//Stap 1
// class is model / blauwdruk
class kledingstuk {
    private $naam;
    private $prijs;
    private $fotos;

    public function setNaam($param){
        $this->naam = $param;
    }
    public function setPrijs($param){
        $this->prijs = $param;
    }
    public function setFotos($param){
        $this->fotos = $param;
    }
    public function getNaam(){return $this->naam;}
    public function getPrijs(){return $this->prijs;}
    public function getFotos(){return $this->fotos;}
}

?>