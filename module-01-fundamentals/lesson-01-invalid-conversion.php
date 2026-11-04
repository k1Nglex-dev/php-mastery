<?php

declare(strict_types=1);

$total = 0;
$quantity = '5';
$price = 12.50;

if (is_numeric($quantity)) {
    $total = $quantity * $price;
    echo 'Total: ' . $total . PHP_EOL;
} else {
    echo 'Cantitate invalida.';
}
