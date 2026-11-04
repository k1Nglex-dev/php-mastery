<?php

declare(strict_types=1);

// ============================================================
// PHPUNIT - CALCULATOR TEST
// PHP Mastery - Educational examples
// ============================================================

use PHPUnit\Framework\TestCase;

// ------------------------------------------------------------
// 01. DISCOUNT ASSERTION
// Verify the final amount after applying a discount.
// ------------------------------------------------------------
final class CalculatorTest extends TestCase
{
    public function testCalculPretCuDiscount(): void
    {
        $pret = 100;
        $cantitate = 3;
        $discount = 0.10;

        $total = $pret * $cantitate;
        $rezultat = $total - ($total * $discount);

        $this->assertEquals(270, $rezultat);
    }
}
