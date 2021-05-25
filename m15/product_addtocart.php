<?
require_once "lib/php/functions.php";

$product = getData("SELECT * FROM `products` WHERE `id` = '{$_POST[`id`]}'")[0];

addedToCart($_POST['id'],$_POST['amount'],$product->price);

header("location:product_addedtocart.php?id={$_POST['id']}");


?>