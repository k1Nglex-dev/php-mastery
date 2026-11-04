<?php

declare(strict_types=1);

// ============================================================
// LESSON 05 - ARRAYS
// PHP Mastery | Module 01 - Fundamentals
// ============================================================

// ------------------------------------------------------------
// 01. ARRAY OPERATIONS
// Adauga, modifica si elimina elemente.
// ------------------------------------------------------------
echo '========== ARRAY OPERATIONS ==========' . PHP_EOL;

$products = ['Bread', 'Milk', 'Eggs'];

$products[] = 'Butter';
$products[1] = 'Cheese';
unset($products[2]);
$products[] = 'Sugar';
print_r($products);
echo PHP_EOL;

// ------------------------------------------------------------
// 02. REINDEXING
// array_values() reface indexurile numerice.
// ------------------------------------------------------------
echo '======== RESCRIERE INDEXURI ARRAY======' . PHP_EOL;

$products = array_values($products);
print_r($products);
echo PHP_EOL;

// ------------------------------------------------------------
// 03. SUM AND COUNT
// array_sum() aduna valorile; count() numara elementele.
// ------------------------------------------------------------
echo '======= ADUNAREA VALORILOR DINTR-UN ARRAY =======' . PHP_EOL;

$prices = [10, 20, 30, 40, 50];

unset($prices[2]);
$totalPrices = array_sum($prices);
echo $totalPrices . PHP_EOL;
echo count($prices) . PHP_EOL;
echo PHP_EOL;

// ------------------------------------------------------------
// 04. ARRAY INDEXES
// unset() nu reindexeaza automat cheile.
// ------------------------------------------------------------
echo '======== NUMARAREA ELEMENTELOR DINTR-UN ARRAY SI ACCESAREA UNUI INDEX =========' . PHP_EOL;

$numbers = [10, 20, 30, 40];

unset($numbers[1]);

echo count($numbers) . PHP_EOL;
echo $numbers[2] . PHP_EOL;
echo PHP_EOL;

// ------------------------------------------------------------
// 05. FILTERING ARRAYS
// Filtrare cu foreach si array_filter().
// ------------------------------------------------------------
echo '========== FILTRARE CU FOREACH ==========' . PHP_EOL;

$prices = [10, 20, 30, 40, 50];

foreach ($prices as $price) {
    if ($price > 25) {
        echo $price . PHP_EOL;
    }
}

$numbers = [5, 12, 8, 25, 30, 3, 18];

$filteredNumbers = array_filter(
    $numbers,
    fn(int $number): bool => $number > 10
);

$filteredNumbers = array_values($filteredNumbers);

print_r($filteredNumbers);

// ------------------------------------------------------------
// 06. PRACTICE - ADULT AGES
// Pastreaza varstele de minimum 18 ani.
// ------------------------------------------------------------
echo '============== VERIFICAREA INTELEGERII ==============' . PHP_EOL;

$ages = [15, 22, 17, 30, 12, 18, 45];

$adultFilter = array_filter(
    $ages,
    fn(int $age): bool => $age >= 18
);

$adultFilter = array_values($adultFilter);

print_r($adultFilter);
echo 'Total adults: ' . count($adultFilter) . PHP_EOL;
echo PHP_EOL;

// ------------------------------------------------------------
// 07. ARRAY_MAP - NUMBERS
// Transforma fiecare pret din array.
// ------------------------------------------------------------
echo '========== ARRAY MAP: NUMBERS ==========' . PHP_EOL;
$prices = [100, 250, 80, 400];
$multipliedPrices = array_map(
    fn(int $price): int => $price * 2,
    $prices
);
print_r($multipliedPrices);

$discountedPrices = array_map(
    fn(int $price): float => $price * 0.90,
    $prices
);
print_r($discountedPrices);

// ------------------------------------------------------------
// 08. ARRAY_MAP - STRINGS
// Transforma numele produselor in majuscule.
// ------------------------------------------------------------
echo '========== ARRAY MAP: STRINGS ==========' . PHP_EOL;

$products = ['bread', 'milk', 'cheese', 'butter'];
$upperProducts = array_map(
    fn(string $product): string => strtoupper($product),
    $products
);
print_r($upperProducts);

// ------------------------------------------------------------
// 09. KEYS AND VALUES
// Examineaza cheile si valorile array-ului asociativ.
// ------------------------------------------------------------
echo '========== ARRAY KEYS ==========' . PHP_EOL;

$employee = [
    'id' => 15,
    'name' => 'Andrei',
    'department' => 'IT',
    'salary' => 5500,
];

$employeeKeys = array_keys($employee);
$employeeValues = array_values($employee);
print_r($employeeKeys);
print_r($employeeValues);
echo count($employee) . PHP_EOL;

unset($employee['department']);
print_r(array_keys($employee));

echo PHP_EOL;

// ------------------------------------------------------------
// 10. ARRAY_KEY_EXISTS VS ISSET
// Diferenta dintre existenta cheii si valoarea non-null.
// ------------------------------------------------------------
$product = [
    'id' => 101,
    'name' => 'Bread',
    'price' => 15,
    'stock' => null,
];

if (array_key_exists('price', $product)) {
    echo 'Price exists' . PHP_EOL;
} else {
    echo 'Price missing' . PHP_EOL;
}
if (array_key_exists('category', $product)) {
    echo 'Category exists' . PHP_EOL;
} else {
    echo 'Category is missing' . PHP_EOL;
}

if (array_key_exists('stock', $product)) {
    echo 'Stock exists' . PHP_EOL;
} else {
    echo 'Stock is missing' . PHP_EOL;
}

if (isset($product['stock'])) {
    echo 'Stock nu este null' . PHP_EOL;
} else {
    echo 'Stock is null or missing' . PHP_EOL;
}
