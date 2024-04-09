<?php
// models/Product.php

namespace Models; // Note: Namespace is now 'Models'

class Product
{
    public static function getProductData(): array
    {
        // Read product data from JSON file  
        $jsonString = file_get_contents(__DIR__. '/../data/products.json'); // Adjust path to reflect the correct directory structure
      
        return json_decode($jsonString, true);
    }
}