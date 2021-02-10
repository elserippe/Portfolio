<?php

require "models/kledingkast.php";

$voornaam = "Mode";
$achternaam = "Huis";

$Collectie = 2021;

$Kedingstukken = ["Rok", "Shirt","Broek"];

$Shirt = (object)[
    'type' => 'Korte mouw',
    'naam'=>'Basic T-Shirt'
];


$Kledingstukken1 = new Kledingkast("Korte mouw","T-shirt");
$Kledingstukken1->setCollectie(2021);
$Rok = new Kledingkast("Rok","A-lijn rok");

/*
$t = date("02-02-2021");

if ($t < "18") {
  echo "Goede Middag!";
}*/

require "template/home.php";
?>

