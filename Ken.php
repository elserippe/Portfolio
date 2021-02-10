<?php
// Na elke variabele eindig je met een ; "puntkomma"
// Variabelen, tekst is met "" en getallen zijn zonder tekens
$voornaam = "Else";
$achternaam = "Rippe";

// een heel getal noem je een integer, een comma-getal noem je een float of decimal
$leeftijd = 30;

// Een lijst van dieren, lijsten definieer je met [] "blokhaken"
$dieren = ["Aap", "Olifant","Pinguin"];

// object is een variabele met meerdere variabelen in zich
$aap1 = (object)[
    'type' => 'Aap',
    'naam'=>'koko'
];

// met var_dump laat je wat info over een variabel zien
var_dump($aap1);

// een class is een blauwdruk, die herbruikt kan worden om objecten te maken van een specifiek type (class naam: dier)
class dier {
    // De variabelen van een class, dit zijn de waarden die wij vinden dat een dier object moet hebben
    public $type;
    // public mag overal worden aangeroepen en worden aangepast
    public $naam;
    // private mag alleen binnen de huidige class worden aangeroepen of aangepast
    private $leeftijd;
    
        
    // De constructor wordt aangeroepen zodra je "new" aanroept. Je kan hier dus een nieuw object van het type dier mee maken.
    public function __construct($typeParameter,$naamParameter){
        $this->type = $typeParameter;
        $this->naam = $naamParameter;
    }

    // met een "set" functie geef je de variabele in de class een nieuwe waarde
    public function setLeeftijd($leeftijdParameter){
        $this->leeftijd = $leeftijdParameter;
    }

    // met de "get" functie haal je de waarde van een variabele binnen de class op
    public function getLeeftijd(){
        return $this->leeftijd;
    }
}

$aap2 = new dier("Aap","Koko");
$aap2->setLeeftijd(15);
$olifant = new dier("Olifant","Dumbo");

echo $aap2->naam;
echo $aap2->getLeeftijd();

$t = date("29-1-2021");

if ($t < "20") {
  echo "Have a good day!";
}
?>

echo 'hallo CMS';