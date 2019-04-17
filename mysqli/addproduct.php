<?php
require "app/products.php";
$name = $_POST['name'];
$price = $_POST['price'];
$brand = $_POST['brand'];

spl_autoload_register(function ($class_name){
    require "app/" .$class_name . ".php";
});
$product = new product();
$product->addproduct($brand, $name, $price);

header('location:index.php');
?>