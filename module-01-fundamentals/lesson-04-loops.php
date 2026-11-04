<?php

declare(strict_types=1);


//===========  FOR

for ($i = 1; $i <= 20; $i++) {
    $remainder = $i % 2;
    if ($remainder === 0) {
        echo $i . PHP_EOL;
    }
}

//===========  WHILE

$countDown = 17;

while ($countDown > 0) {
    echo $countDown . PHP_EOL;
    $countDown--;
}

//===========  DO .... WHILE

$counter = 1;
do {
    echo $counter . PHP_EOL;
    $counter++;
} while ($counter <= 5);

//=========== BREAK

for ($i = 1; $i <= 20; $i++) {
    if ($i === 8) {
        break;
    }
    echo $i . PHP_EOL;
}

//=========== CONTINUE

for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo $i . PHP_EOL;
}

//=========== FOREACH

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


//=========== ACCUMULATOR cu +=
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
