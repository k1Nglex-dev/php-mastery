<?php

declare(strict_types=1);

$price = 125;
$quantity = 4;
$value = $price * $quantity;
$discount = $value * 0.10;
$totalValue = $value - $discount;

echo 'Subtotal: ' . $value . PHP_EOL;
echo 'Discount: ' . $discount . PHP_EOL;
echo 'Total: ' . $totalValue . PHP_EOL;


$number = 24;
$remainder = $number % 2;

if ($remainder === 0) {
    echo $number . ' is even' . PHP_EOL;
} else {
    echo $number . ' is odd' . PHP_EOL;
}

$firstNumber = 10;
$secondNumber = '10';

var_dump($firstNumber == $secondNumber);
var_dump($firstNumber === $secondNumber);
var_dump($firstNumber !== $secondNumber);
