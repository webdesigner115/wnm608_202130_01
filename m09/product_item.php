<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Candles Store Single Item</title>
	<?include "parts/meta.php" ?>
</head>
<body>
	<?include "parts/navbar.php" ?>

	<div class="container pad push-down">
		<nav class="nav-crumbs">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>
		<div class="card card-soft card-light">
			<h2>Product <?= $_GET['id']?></h2>
		</div>
	</div>
	
</body>
</html>