<?php

declare(strict_types=1);

// ============================================================
// LESSON 01 - STRICT TYPES
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. TYPED FUNCTION
// Strict types prevent implicit scalar coercion at call sites.
// ------------------------------------------------------------
function doubleNumber(int $number): int
{
    return $number * 2;
}

echo doubleNumber(5);
