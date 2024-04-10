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

// Check if the form has been submitted
if (isset($_POST['form_submitted'])) {
    // Call the calculateTotal() method
    $productController->calculateTotal();
} else {
    // Call the list() method to get the product data
    $productController->list();
}
    ?>
</body>
</html>