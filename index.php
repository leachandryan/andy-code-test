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

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Call the calculateTotal method and get the result
    $result = $productController->calculateTotal($_POST['quantity']);

    // Load the total_price view with the result
    $productController->loadView('total_price', $result);
} else {
    // If the form is not submitted, show the product list
    $productController->list();
}
    ?>
</body>
</html>