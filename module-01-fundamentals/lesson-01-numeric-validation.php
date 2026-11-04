<?php

declare(strict_types=1);

// ============================================================
// LESSON 01 - NUMERIC VALIDATION
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. INPUT VALIDATION
// is_numeric() checks whether a value is numeric.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. INPUT VALIDATION ==========' . PHP_EOL;

$total = 0;
$quantity = '5';
$price = 12.50;

if (is_numeric($quantity)) {
    $total = $quantity * $price;
    echo 'Total: ' . $total . PHP_EOL;
} else {
    echo 'Cantitate invalida.';
}
