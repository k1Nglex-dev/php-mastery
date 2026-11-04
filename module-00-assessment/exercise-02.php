<?php

declare(strict_types=1);

// ============================================================
// ASSESSMENT 02 - INVENTORY
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. PRODUCT INVENTORY
// Define product prices and available stock.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. PRODUCT INVENTORY ==========' . PHP_EOL;

$products = [
    ['name' => 'Laptop', 'price' => 3500, 'stock' => 5],
    ['name' => 'Mouse', 'price' => 120, 'stock' => 15],
    ['name' => 'Keyboard', 'price' => 250, 'stock' => 0],
    ['name' => 'Monitor', 'price' => 1200, 'stock' => 8],
];

// ------------------------------------------------------------
// 02. INVENTORY STATISTICS
// Track inventory value and available products.
// ------------------------------------------------------------
echo PHP_EOL . '========== 02. INVENTORY STATISTICS ==========' . PHP_EOL;

$inventoryTotal = 0;
$highestPrice = 0;
$mostExpensiveProduct = '';
$availableProducts = 0;

// ------------------------------------------------------------
// 03. PRODUCT ANALYSIS
// Calculate stock value and identify the highest price.
// ------------------------------------------------------------
echo PHP_EOL . '========== 03. PRODUCT ANALYSIS ==========' . PHP_EOL;

foreach ($products as $product) {
    if ($product['stock'] > 0) {
        echo 'Produs: ' . $product['name'] . ' | Pret: ' . $product['price'] . ' | Stoc: ' . $product['stock'] . PHP_EOL;
        $availableProducts++;
    } else {
        echo $product['name'] . ' - Stoc epuizat' . PHP_EOL;
    }
    $inventoryTotal += $product['price'] * $product['stock'];

    if ($product['price'] > $highestPrice) {
        $highestPrice = $product['price'];
        $mostExpensiveProduct = $product['name'];
    }
}

// ------------------------------------------------------------
// 04. SUMMARY
// Display the calculated inventory statistics.
// ------------------------------------------------------------
echo PHP_EOL . '========== 04. SUMMARY ==========' . PHP_EOL;

echo 'Valoare totala inventar: ' . $inventoryTotal . PHP_EOL;
echo 'Cel mai scump produs: ' . $mostExpensiveProduct . PHP_EOL;
echo 'Pret: ' . $highestPrice . PHP_EOL;
echo 'Produse disponibile: ' . $availableProducts;
