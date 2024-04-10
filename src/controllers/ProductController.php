<?php
// controllers/ProductController.php

namespace Controllers;

require_once __DIR__ . '/../models/Product.php';

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

    public function calculateTotal($quantities)
    {
        // Get product data
        $products = Product::getProductData();

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

        // Return the calculated values
        return ['totalPrice' => $totalPrice, 'shippingCost' => $shippingCost, 'totalCost' => $totalCost];
    }

    // Change this method to public
    public function loadView($view, $data)
    {
        extract($data);
        include __DIR__ . "/../views/{$view}.php";
    }
}