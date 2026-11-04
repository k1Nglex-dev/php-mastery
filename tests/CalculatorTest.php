<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

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
