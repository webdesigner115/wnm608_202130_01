<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Candle Store: Product List</title>

  <?php include "parts/meta.php" ?>

  <script src="lib/js/functions.js"></script>
  <script src="js/templates.js"></script>
  <script src="js/list.js"></script>

</head>
<body>

  <?php include "parts/navbar.php" ?>


  <div class="container">
    <h2>Product List</h2>

    <div class="form-control">
      <form class="hotdog light" id="product-search">
        <input type="search" class="search" placeholder="Search Products">
      </form>
    </div>
    <div class="form-control display-flex">
      <div class="flex-none">
        <button type="button" class="form-button js-filter" data-column="category" data-value="">All</button>
      </div>
      <div class="flex-none">
        <button type="button" class="form-button js-filter" data-column="category" data-value="floral">Floral</button>
      </div>
      <div class="flex-none">
        <button type="button" class="form-button js-filter" data-column="category" data-value="woody">Woody</button>
      </div>
      <div class="flex-none">
        <button type="button" class="form-button js-filter" data-column="category" data-value="fruity">Fruity</button>
      </div>
      <div class="flex-none">
        <button type="button" class="form-button js-filter" data-column="category" data-value="citrus">Citrus</button>
      </div>
    </div>
    <div class="form-control">
      <div class="form-select">
        <select class="js-sort">
          <option value="1">Newest</option>
          <option value="2">Oldest</option>
          <option value="3">Most Expensive</option>
          <option value="4">Least Expensive</option>
        </select>
      </div>
    </div>
    
    <div class="grid gap productlist"></div>

    <div><a href="admin">Product Admin</a></div>
    
  
  </div>
  
</body>
</html>