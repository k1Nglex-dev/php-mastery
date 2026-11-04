<?php

declare(strict_types=1);


//===========  FOR  ============

for ($i = 1; $i <= 20 ; $i++) {
    $remainder = $i % 2;
    if ($remainder === 0) {
        echo $i . PHP_EOL;
    }
};

//===========  WHILE  ============

$a = 17;

while ($a > 0) {
    echo $a . PHP_EOL;
    $a--;
};

//===========  DO .... WHILE  ============

$counter = 1;
do {
    echo $counter . PHP_EOL;
    $counter++;
} while ($counter <= 5);

//=========== BREAK ============

for ($i = 1; $i <= 20; $i++) {
    if ($i === 8) {
        break;
    }
    echo $i . PHP_EOL;
}


for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo $i . PHP_EOL;
}

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

$products = ['Bread', 'Milk', 'Eggs'];

$products[] = 'Butter';
$products[1] = 'Cheese';
unset($products[2]);
$products[] = 'Sugar';
print_r($products);
echo '==============' . PHP_EOL;
$products = array_values($products);
print_r($products);

$prices = [10, 20, 30, 40, 50];
unset($prices[2]);
$totalPrices = array_sum($prices);
echo $totalPrices . PHP_EOL;
echo count($prices);
