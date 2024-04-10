<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Price</title>
</head>
<body>
    <h1>Total Price</h1>
    <?php
    // Initialize variables to avoid undefined variable warnings
    $totalPrice = isset($totalPrice) ? $totalPrice : 0;
    $shippingCost = isset($shippingCost) ? $shippingCost : 0;
    $totalCost = isset($totalCost) ? $totalCost : 0;
    ?>
    <p>Total Price: $<?= number_format($totalPrice, 2) ?></p>
    <p>Shipping Cost: $<?= number_format($shippingCost, 2) ?></p>
    <p>Total Cost (including shipping): $<?= number_format($totalCost, 2) ?></p>
</body>
</html>