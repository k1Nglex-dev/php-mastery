<?php
declare(strict_types=1);

$pret = 100;
$cantitate = 3;

$total = $pret * $cantitate;
$discount = $total * 0.10;
$final = $total - $discount;

echo "Pret final: {$final} RON\n";
