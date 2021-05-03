<?
require_once "lib/php/functions.php";
require_once "parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id= {$_GET['id']}")[0];

$thumbs = explode(",", $product->images);

$thumbs_elements = array_reduce($images,function($r,$o){
	return $r."<img src='images/store/$o'>";

});
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Candles Store Single Item: <?= $product->title ?></title>
	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	  <div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="image-main">
						<img src="images/store/<?= $product->main_image ?>" alt="">
					</div>
					<div class="image-thumbs">
						<?= $thumbs_elements?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="post" action="product_actions.php?action=add-to-cart">

					<input type="hidden" name="product-id" value="<?= $product->id ?>">

                    <div class="card-section">
						
					    <h2><?= $product->title ?></h2>
				        <div>&dollar;<?= $product->price ?></div>

				    </div>

					<div class="card-section">
						<div class="form-control">

							<label for="product-amount" class="form-label">Amount</label>
							<div class="form-select">
								<select name="product-amount" id="product-amount">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</div>
						</div>
					
                    <div class="form-control">
                    	<label for="product-color" class="form-label">Color</label>
                    	<div class="form-select">
                    		<select name="product-color" id="product-color">
                    			<option value="red">Red</option>
                    			<option value="green">Green</option>
                    			<option value="blue">Blue</option>
                    		</select>
                    	</div>
                    </div>
                    <div class="form-control">
                    	<input type="submit" class="for-button" value="Add To Cart">
                    </div>
                   </div>
				</form>
			</div>
		</div>
		<div class="card soft medium">
				<p><?= $product->description ?></p>
		</div>

		<hr class="spacer">

		<h2>Related Products</h2>

		<div class="grid gap ">
			<?php
               
               echo array_reduce(
               	MYSQLIQuery("
               		SELECT *
               		FROM products
               		WHERE id in (4,6,8)"),
               		'makeProductList');

			?>
		</div>
	</div>

	
</body>
</html>















