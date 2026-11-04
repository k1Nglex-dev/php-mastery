<?php

declare(strict_types=1);

// ============================================================
// LESSON 02 - OPERATORS
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. ARITHMETIC OPERATORS
// Calculate subtotal, discount and final total.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. ARITHMETIC OPERATORS ==========' . PHP_EOL;

$price = 125;
$quantity = 4;
$value = $price * $quantity;
$discount = $value * 0.10;
$totalValue = $value - $discount;

echo 'Subtotal: ' . $value . PHP_EOL;
echo 'Discount: ' . $discount . PHP_EOL;
echo 'Total: ' . $totalValue . PHP_EOL;

// ------------------------------------------------------------
// 02. MODULO OPERATOR
// Check whether a number is even or odd.
// ------------------------------------------------------------
echo PHP_EOL . '========== 02. MODULO OPERATOR ==========' . PHP_EOL;

$number = 24;
$remainder = $number % 2;

if ($remainder === 0) {
    echo $number . ' is even' . PHP_EOL;
} else {
    echo $number . ' is odd' . PHP_EOL;
}

// ------------------------------------------------------------
// 03. COMPARISON OPERATORS
// Compare loose and strict equality.
// ------------------------------------------------------------
echo PHP_EOL . '========== 03. COMPARISON OPERATORS ==========' . PHP_EOL;

$firstNumber = 10;
$secondNumber = '10';

var_dump($firstNumber == $secondNumber);
var_dump($firstNumber === $secondNumber);
var_dump($firstNumber !== $secondNumber);
