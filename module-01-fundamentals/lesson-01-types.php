<?php

declare(strict_types=1);

$age = 25;
$price = 19.99;
$name = 'Alex';
$isActive = true;
$products = ['Laptop', 'Mouse'];
$discount = null;

echo get_debug_type($age) . PHP_EOL;
echo get_debug_type($price) . PHP_EOL;
echo get_debug_type($name) . PHP_EOL;
echo get_debug_type($isActive) . PHP_EOL;
echo get_debug_type($products) . PHP_EOL;
echo get_debug_type($discount) . PHP_EOL;

$price = '49.99';
$quantity = '3';
$convertedPrice = (float) $price;
$convertedQuantity = (int) $quantity;

echo PHP_EOL;
echo get_debug_type($price) . PHP_EOL;
echo get_debug_type($quantity) . PHP_EOL;
echo get_debug_type($convertedPrice) . ': ' . $convertedPrice . PHP_EOL;
echo get_debug_type($convertedQuantity) . ': ' . $convertedQuantity . PHP_EOL;
