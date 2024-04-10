<?php
// /src/tests/ProductControllerTest.php
require_once 'src/controllers/ProductController.php';
use PHPUnit\Framework\TestCase;
use Controllers\ProductController;

class ProductControllerTest extends TestCase
{
    public function testCalculateTotal()
    {
        // Create a new instance of the ProductController class
        $productController = new ProductController();

        // Set the $_POST['quantity'] array
        $quantities = [
            'R01' => 1,
            'G01' => 1,
            'B01' => 1,
        ];

        // Call the calculateTotal method with the quantities
        $result = $productController->calculateTotal($quantities);

        // Add assertions to check the returned values
        $this->assertIsArray($result);
        $this->assertArrayHasKey('totalPrice', $result);
        $this->assertArrayHasKey('shippingCost', $result);
        $this->assertArrayHasKey('totalCost', $result);

        // Add assertions to check the calculated costs
        // Replace the expected values with the correct ones based on your calculation logic
        $expectedTotalPrice = 65.85; // Replace with expected total price
        $expectedShippingCost = 2.95; // Replace with expected shipping cost
        $expectedTotalCost = 68.80; // Replace with expected total cost

        $this->assertEquals($expectedTotalPrice, $result['totalPrice']);
        $this->assertEquals($expectedShippingCost, $result['shippingCost']);
        $this->assertEquals($expectedTotalCost, $result['totalCost']);
    }
}