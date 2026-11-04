<?php

declare(strict_types=1);

$name = 'Alex';
$age = 26;
$isActive = false;

echo 'Utilizator: ' . $name . PHP_EOL;
echo 'Varsta: ' . $age . PHP_EOL;
echo 'Status: ' . ($isActive ? 'Activ' : 'Inactiv') . PHP_EOL;


if ($age >= 18 && $isActive) {
    echo $name . ' - Acces permis';
} elseif ($age < 18) {
    echo $name . ' - Acces interzis: varsta insuficienta';
} elseif ($age >= 18 && !$isActive) {
    echo $name . ' - Acces interzis: cont inactiv';
}
