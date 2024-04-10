<?php
// controllers/ProductController.php

namespace Controllers;

require_once __DIR__ . '/../models/Product.php'; // Add this line

use Models\Product;

class ProductController
{
    public function list()
    {
        // Get product data
        $products = Product::getProductData();
    
        // Check if $products is not null or empty
        if (!$products) {
            $products = [];
        }
    
        // Load view and pass $products variable
        $this->loadView('product_list', ['products' => $products]);

     
    
   
    }
    public function calculateTotal()
{
 
    // Get product data
    $products = Product::getProductData();

    // Get the quantities from the form submission
    $quantities = $_POST['quantity'];

    // Define the variables with default values
    $totalPrice = 0;
    $shippingCost = 0;
    $totalCost = 0;
    // Calculate the total price
    foreach ($products as $product) {
        $quantity = isset($quantities[$product['code']]) ? $quantities[$product['code']] : 0;
        $totalPrice += $product['price'] * $quantity;
    }

    // Calculate the shipping cost based on the total price
    if ($totalPrice < 50) {
        $shippingCost = 4.95;
    } elseif ($totalPrice < 90) {
        $shippingCost = 2.95;
    } else {
        $shippingCost = 0;
    }

    $totalCost = $totalPrice + $shippingCost;


    // Load the total_price view
    $this->loadView('total_price', ['totalPrice' => $totalPrice, 'shippingCost' => $shippingCost, 'totalCost' => $totalCost]);
}
    private function loadView($view, $data)
    {
        extract($data);
        include __DIR__ . "/../views/{$view}.php";
    }
}