<?php

declare(strict_types=1);

$age = 150;

$category = match (true) {
    $age < 0, $age > 120 => 'Invalid age',
    $age <= 12 => 'Child',
    $age <= 17 => 'Teenager',
    $age <= 64 => 'Adult',
    $age <= 120 => 'Senior',
};

echo $category . PHP_EOL;
