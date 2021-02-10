<!-- Dit is de template -->
<html>
<head>
    <!-- Hier vul je de titel in, Deze zie je in je tabblad staan -->
    <title>Else| <?php echo $pagina->getTitle();  ?></title>
</head>
<body>
<!-- Toon de variabelen die we gevuld hebben in ons model -->
<!-- $pagina verwijst naar $pagina in "voorbeeld.php" -->
<h1><?php echo $pagina->getTitle();  ?></h1>
<p><?php echo $pagina->getDescription();  ?></p>
<p><?php echo $pagina->text;  ?></p>

<p>Hallo ik ben Else</p>


</body>
</html>