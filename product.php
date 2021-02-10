<?php

class winkelmand {
    public $producten;
   
    public function getPrijsTotaal(){
        $totalPrice = 0;

        foreach($this->producten as $product){
            $totalPrice += $product->prijs;
        }
        $totalPrice *= 1.21;
        return $totalPrice;
    }
}

class product {
    private $naam;
    private $type;
    private $voorraad;
    private $prijs;

    public function __construct(){}

    public function setType($type){
        $this->type=$type;
        return $this;
    }
    public function setVoorraad($voorraad){
        $this->voorraad=$voorraad;
        return $this;
    }
    public function setPrijs($prijs){
        $this->prijs=$prijs;
        // met return this geven we de huidige class terug, hierdoor kunnen we set functies achter elkaar aanroepen
        return $this;
    }
    public function setNaam($naam){
        $this->naam=$naam;
        return $this;
    }
    public function getNaam(){
       return $this->naam;
    }
}

$kledingstuk1 = new product();
$kledingstuk1->setNaam("Super toffe rok")
->setPrijs(10)
->setType("Rok")
->setVoorraad(2);

$kledingstuk2 = new product();
$kledingstuk2->setNaam("Super toffe broek")
->setPrijs(10)
->setType("Broek")
->setVoorraad(2);

//echo $kledingstuk1->getNaam();
//echo $kledingstuk2->getNaam();


$winkelmand = new winkelmand();
// voeg product toe
// laat prijs zien
// voeg nog 5 producten toe
// laat prijs zien
// verwijder 2 producten
// laat prijs zien


?>

