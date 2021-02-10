<?php

require 'models/pagina.php';

$pagina = new pagina();
$pagina->setTitle("Voorbeeld 2");
$pagina->setDescription("Dit is een voorbeeld pagina 2");
$pagina->text = "Hallo";

require 'template/content.php';
?>
