<?php

// haal de blauwdruk op, zodat we hem kunnen gebruiken
require 'models/voorbeeld3-Blauwdruk.php';

// maak een nieuw object van de blauwdruk
$rok = new kledingstukken();

// vul de variabelen in de blauwdruk met wat waarden
$rok->setTitel("Super gave rok!");
$rok->setOmschrijving("Koop nu deze super toffe rok!");
$rok->tekst = "Lorum ipsum";

// laat de blauwdruk zien
require 'template/voorbeeld3-template.php';

?>

