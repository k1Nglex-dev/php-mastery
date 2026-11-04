<?php

declare(strict_types=1);

// ============================================================
// LESSON 01 - RETURN TYPES
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. VALIDATED RETURN VALUE
// Return a positive integer or throw an exception.
// ------------------------------------------------------------
function getQuantity(): int
{
    $quantity = '-5';
    $validatedQty = filter_var($quantity, FILTER_VALIDATE_INT);

    if ($validatedQty === false || $validatedQty <= 0) {
        throw new InvalidArgumentException('Cantitate invalida');
    }
    return $validatedQty;
}

echo getQuantity() . PHP_EOL;
