<?php
// stap 3
// laad blauwdruk in
require 'models/kledingstuk.php';

// maak object van blauwdruk
$kledingstuk = new kledingstuk();

// Vul het nieuw gemaakte object met wat waarden
$kledingstuk->setNaam("Trui");
$kledingstuk->setPrijs(39.95);
$kledingstuk->setFotos(["https://via.placeholder.com/300.png/09f/fff","https://via.placeholder.com/300.png/09f/fff","https://via.placeholder.com/300.png/09f/fff"]);

// Require het nieuw gemaakte template zodat deze getoont wordt
require 'template/kledingstuk.php';

?>