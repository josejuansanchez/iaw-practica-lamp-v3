<?php
require_once("models/product.php");

$product = new Product();
$products = $product->getAll();

require_once("views/product/view.php");
?>