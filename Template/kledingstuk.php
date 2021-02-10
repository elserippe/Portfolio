<html>
<head>
<title><?php echo $kledingstuk->getNaam(); ?></title>
</head>
<body>
<h1><?php echo $kledingstuk->getNaam(); ?></h1>
<p>Dit kledingstuk kost: <?php echo $kledingstuk->getPrijs(); ?></p>

<?php foreach($kledingstuk->getFotos() as $foto) { ?>
    <img src="<?php echo $foto; ?>"/>
<?php  } ?>

</body>
</html>