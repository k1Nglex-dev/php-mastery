<?php

declare(strict_types=1);

// ============================================================
// ASSESSMENT 01 - ACCESS CONTROL
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. USER DATA
// Define the user information.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. USER DATA ==========' . PHP_EOL;

$name = 'Alex';
$age = 26;
$isActive = false;

echo 'Utilizator: ' . $name . PHP_EOL;
echo 'Varsta: ' . $age . PHP_EOL;
echo 'Status: ' . ($isActive ? 'Activ' : 'Inactiv') . PHP_EOL;

// ------------------------------------------------------------
// 02. ACCESS VALIDATION
// Check age and account status.
// ------------------------------------------------------------
echo PHP_EOL . '========== 02. ACCESS VALIDATION ==========' . PHP_EOL;

if ($age >= 18 && $isActive) {
    echo $name . ' - Acces permis';
} elseif ($age < 18) {
    echo $name . ' - Acces interzis: varsta insuficienta';
} elseif ($age >= 18 && !$isActive) {
    echo $name . ' - Acces interzis: cont inactiv';
}
