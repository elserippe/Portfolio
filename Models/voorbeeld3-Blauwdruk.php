<?php
/* Een class is een blauwdruk (ook wel model genoemd), deze class kan herbruikt worden om objecten te maken van een specifiek type
bijv. class Kledingstukken { */
//Dit is mijn blauwdruk, dus mijn model.
class kledingstukken {
     //Voorbeeld van variabelen die een class kan hebben.
    private $titel;
    private $omschrijving;
    public $tekst;
    public $inhoud;

    // Een functie die wordt aangeroepen zodra je "new" aanroept. Met "new" kun je een nieuw object van het type kledingstukken maken.
    public function setTitel($titelParam){
        $this->titel = $titelParam;
    }
    public function setOmschrijving($omschrijvingParam){
        $this->omschrijving = $omschrijvingParam;
    }
    public function getTitel(){
        return $this->titel;
    }
    public function getmschrijving(){
        return $this->omschrijving;
    }
}

?>