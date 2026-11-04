<?php

declare(strict_types=1);

$products = [
    ['name' => 'Laptop', 'price' => 3500, 'stock' => 5],
    ['name' => 'Mouse', 'price' => 120, 'stock' => 15],
    ['name' => 'Keyboard', 'price' => 250, 'stock' => 0],
    ['name' => 'Monitor', 'price' => 1200, 'stock' => 8],
];

$inventoryTotal = 0;
$highestPrice = 0;
$mostExpensiveProduct = '';
$availableProducts = 0;

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

echo 'Valoare totala inventar: ' . $inventoryTotal . PHP_EOL;
echo 'Cel mai scump produs: ' . $mostExpensiveProduct . PHP_EOL;
echo 'Pret: ' . $highestPrice . PHP_EOL;
echo 'Produse disponibile: ' . $availableProducts;
