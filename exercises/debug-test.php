<?php
declare(strict_types=1);

// ============================================================
// EXERCISE - DEBUGGING
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. PRICE AND DISCOUNT
// Calculate the final price after a 10% discount.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. PRICE AND DISCOUNT ==========' . PHP_EOL;

$pret = 100;
$cantitate = 3;

$total = $pret * $cantitate;
$discount = $total * 0.10;
$final = $total - $discount;

echo "Pret final: {$final} RON\n";
