<?
session_start();
session_destroy();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Candles store: <?= $product->title ?></title>
	<? include "parts/meta.php" ?>
</head>
<body>

	<? include "parts/navbar.php" ?>
	
</body>
</html>