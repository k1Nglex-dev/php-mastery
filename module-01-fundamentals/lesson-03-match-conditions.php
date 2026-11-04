<?php

declare(strict_types=1);

// ============================================================
// LESSON 03 - MATCH CONDITIONS
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. MATCH TRUE
// Select an age category using boolean conditions.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. MATCH TRUE ==========' . PHP_EOL;

$age = 150;

$category = match (true) {
    $age < 0, $age > 120 => 'Invalid age',
    $age <= 12 => 'Child',
    $age <= 17 => 'Teenager',
    $age <= 64 => 'Adult',
    $age <= 120 => 'Senior',
};

echo $category . PHP_EOL;
