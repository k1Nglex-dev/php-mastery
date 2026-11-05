<?php

declare(strict_types=1);

// PHP Mastery — Practical Assessment
// Exercise 03: Daily Sales Analyzer

$sales = [120, 250, 80, 400, 150, 0, 300];

$totalSales = 0;
$validTransactions = 0;
$highValueTransactions = 0;
$highestSale = 0;

// Part A: Calculate total sales
foreach ($sales as $sale) {
    $totalSales += $sale;
}

// Part B: Count valid transactions
foreach ($sales as $sale) {
    if ($sale > 0) {
        $validTransactions++;
    }
}

// Part C: Count high-value transactions
foreach ($sales as $sale) {
    if ($sale >= 200) {
        $highValueTransactions++;
    }
}

// Part D: Find the highest sale
foreach ($sales as $sale) {
    if ($sale > $highestSale) {
        $highestSale = $sale;
    }
}

// Part E: Display results


echo 'Total sales: ' . $totalSales . ' RON ' . PHP_EOL;
echo 'Valid transactions: ' . $validTransactions . PHP_EOL;
echo 'High-value transactions: ' . $highValueTransactions . PHP_EOL;
echo 'Highest sale: ' . $highestSale . ' RON ' . PHP_EOL;
