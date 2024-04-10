<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <form action="/index.php?route=calculateTotal" method="POST">
    <input type="hidden" name="form_submitted" value="1">
        <table>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['code'] ?></td>
                <td><?= $product['name'] ?></td>
                <td>$<?= number_format($product['price'], 2) ?></td>
                <td><input type="number" name="quantity[<?= $product['code'] ?>]" value="0"></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <button type="submit">Calculate Total</button>
    </form>
</body>
</html>
