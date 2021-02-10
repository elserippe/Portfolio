<?php

// laad blauwdruk in
require 'models/kledingstuk.php';

// maak object van blauwdruk
$kledingstuk = new kledingstuk();

// Vul het nieuw gemaakte object met wat waarden
$kledingstuk->setNaam("Rok");
$kledingstuk->setPrijs(29.95);
$kledingstuk->setFotos(["https://via.placeholder.com/200.png/09f/fff","https://via.placeholder.com/100.png/09f/000","https://via.placeholder.com/300.png/09f/fff"]);

// Require het nieuw gemaakte template zodat deze getoont wordt
require 'template/kledingstuk.php';

?>