<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acme Widget Co</title>
</head>
<body>
    <h1>Welcome to Acme Widget Co</h1>
    <?php
// index.php

// Include the ProductController class
require_once 'src/controllers/ProductController.php';

// Create a new instance of the ProductController class
$productController = new Controllers\ProductController();

// Call the list() method to get the product data
$products = $productController->list();

?>
   
    <?php include 'src/views/total_price.php';?>

</body>
</html>