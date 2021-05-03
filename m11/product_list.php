<?
require_once "lib/php/functions.php";
require_once "parts/templates.php";


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Candles Store Product List</title>
	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<h2>Product List</h2>
		<div class="grid gap ">
			<?php

            echo array_reduce(
            	MYSQLIQuery("
                SELECT *
                FROM products
                ORDER BY date_create DESC
                LIMIT 15
            	"),
            	'makeProductList'
            	
            );


			?>
		</div>	
	</div>

</body>
</html>