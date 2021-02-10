<?php

// Laad de blauwdruk in, zodat we er gebruik van kunnen maken
require 'models/blauwdruk-voorbeeld.php';

// maak een nieuwe object aan op basis van de blauwdruk (pagina)
$pagina = new pagina();
// vul de door ons gedefineerde variabelen met waarden/inhoud
$pagina->setTitle("Voorbeeld");
$pagina->setDescription("Dit is een voorbeeld pagina");

// $pagina->content = [
//     new content()
// ];

// Laad de template in, en toon deze
// wordt getoont omdat er html in staat
require 'template/content-html.php';
?>
