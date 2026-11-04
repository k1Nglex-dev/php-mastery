<?php

declare(strict_types=1);

// ============================================================
// LESSON 04 - LOOPS
// PHP Mastery | Module 01 - Fundamentals
// ============================================================

// ------------------------------------------------------------
// 01. FOR LOOP
// Afiseaza numerele pare de la 1 la 20.
// ------------------------------------------------------------

for ($i = 1; $i <= 20; $i++) {
    $remainder = $i % 2;
    if ($remainder === 0) {
        echo $i . PHP_EOL;
    }
}

// ------------------------------------------------------------
// 02. WHILE LOOP
// Numara descrescator cat timp conditia este adevarata.
// ------------------------------------------------------------

$countDown = 17;

while ($countDown > 0) {
    echo $countDown . PHP_EOL;
    $countDown--;
}

// ------------------------------------------------------------
// 03. DO...WHILE LOOP
// Executa corpul buclei cel putin o data.
// ------------------------------------------------------------

$counter = 1;
do {
    echo $counter . PHP_EOL;
    $counter++;
} while ($counter <= 5);

// ------------------------------------------------------------
// 04. BREAK
// Opreste bucla cand contorul ajunge la 8.
// ------------------------------------------------------------

for ($i = 1; $i <= 20; $i++) {
    if ($i === 8) {
        break;
    }
    echo $i . PHP_EOL;
}

// ------------------------------------------------------------
// 05. CONTINUE
// Sare peste iteratia in care contorul este 5.
// ------------------------------------------------------------

for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo $i . PHP_EOL;
}

// ------------------------------------------------------------
// 06. FOREACH
// Parcurge array-uri indexate si asociative.
// ------------------------------------------------------------

$prices = [10, 25, 15, 30];

foreach ($prices as $price) {
    echo $price . PHP_EOL;
}

$user = [
    'name' => 'Alex',
    'age' => 25,
    'role' => 'Developer',
];

foreach ($user as $key => $value) {
    echo $key . ': ' . $value . PHP_EOL;
}

// ------------------------------------------------------------
// 07. ACCUMULATORS
// Calculeaza sume folosind foreach si +=.
// ------------------------------------------------------------
$prices = [15, 25, 10, 50];
$totalPrices = 0;

foreach ($prices as $price) {
    $totalPrices += $price;
}
echo $totalPrices . PHP_EOL;

$numbers = [3, 8, 12, 5, 20, 7];
$total = 0;

foreach ($numbers as $number) {
    if ($number > 10) {
        $total += $number;
    }
}
echo 'Total: ' . $total . PHP_EOL;
echo PHP_EOL;
