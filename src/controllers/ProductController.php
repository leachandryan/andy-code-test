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
        // Define the variables with default values
        $totalPrice = 0;
        $shippingCost = 0;
        $totalCost = 0;
    
        // Calculate the total price, shipping cost and total cost here
    
        // Load the total_price view
        $this->loadView('total_price', ['totalPrice' => $totalPrice, 'shippingCost' => $shippingCost, 'totalCost' => $totalCost]);
    }

    private function loadView($view, $data)
    {
        extract($data);
        include __DIR__ . "/../views/{$view}.php";
    }
}