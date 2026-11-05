<?php

declare(strict_types=1);

// PHP Mastery — Practical Assessment
// Exercise 04: Product Inventory Analyzer
$inventoryValue = 0;

$products = [
    ['name' => 'Laptop', 'price' => 3500, 'stock' => 5],
    ['name' => 'Mouse', 'price' => 80, 'stock' => 20],
    ['name' => 'Keyboard', 'price' => 250, 'stock' => 0],
    ['name' => 'Monitor', 'price' => 1200, 'stock' => 8],
    ['name' => 'Headphones', 'price' => 150, 'stock' => 12],
];

$outOfStockProducts = [];
$highestPrice = 0;
$mostExpensiveProduct = null;

// Part A: Count products
$productCount = count($products);

// Part B: Calculate inventory value
foreach ($products as $key => $value) {
    $inventoryValue += $value['price'] * $value['stock'];
}
// Part C: Find out-of-stock products
foreach ($products as $key => $value) {
    if ($value['stock'] === 0) {
        $outOfStockProducts[] = $value['name'];
    }
}
// Part D: Find the most expensive product
foreach ($products as $product) {
    if ($product['price'] > $highestPrice) {
        $highestPrice = $product['price'];
        $mostExpensiveProduct = $product['name'];
    }
}


// Part E: Display results
echo 'Total products: ' . $productCount . PHP_EOL;
echo 'Inventory value: ' . $inventoryValue . ' RON' . PHP_EOL;
echo 'Out-of-stock products: ' . implode(', ', $outOfStockProducts) . PHP_EOL;
echo 'Most expensive product: ' . $mostExpensiveProduct . PHP_EOL;
