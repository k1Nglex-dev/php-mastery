<?php

declare(strict_types=1);

// ============================================================
// ASSESSMENT 03 - FUNCTIONS
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. MULTIPLICATION
// Multiply two integers.
// ------------------------------------------------------------
function multiply(int $a, int $b): int
{
    return $a * $b;
}

$result = multiply(5, 3);
echo $result . PHP_EOL;

$result = multiply(10, 2);
echo $result . PHP_EOL;

$result = multiply(7, 0);
echo $result . PHP_EOL;

// ------------------------------------------------------------
// 02. TAX CALCULATION
// Calculate the tax amount from a percentage.
// ------------------------------------------------------------
function calculateTax(float $price, float $taxPercentage): float
{
    return $price * $taxPercentage / 100;
}

$result = calculateTax(200, 10);
echo $result . PHP_EOL;

$result = calculateTax(150, 20);
echo $result . PHP_EOL;

$result = calculateTax(99.99, 5);
echo $result . PHP_EOL;

// ------------------------------------------------------------
// 03. DISCOUNT VALIDATION
// Validate inputs and calculate a discounted price.
// ------------------------------------------------------------
function calculateDiscount(float $price, float $percentage): float
{
    if ($price < 0) {
        throw new InvalidArgumentException('Price cannot be negative');
    } elseif ($percentage < 0 || $percentage  > 100) {
        throw new InvalidArgumentException('Percentage must be between 0 and 100.');
    }

    return $price - ($price * $percentage / 100);
}

echo calculateDiscount(200, 10) . PHP_EOL;
echo calculateDiscount(150, 20) . PHP_EOL;
echo calculateDiscount(100, 0) . PHP_EOL;
echo calculateDiscount(100, 100) . PHP_EOL;

// ------------------------------------------------------------
// 04. INVALID INPUT TESTS
// Handle invalid discount arguments with exceptions.
// ------------------------------------------------------------
try {
    echo calculateDiscount(-100, 20);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
try {
    echo calculateDiscount(100, -10);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
try {
    echo calculateDiscount(100, 150);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
