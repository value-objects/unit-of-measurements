<?php

declare(strict_types=1);

namespace CodingMatters\UoMTest;

use CodingMatters\UoM\Weight;
use CodingMatters\UoM\Symbol;
use CodingMatters\UoMTest\Fixtures\GramsTestData;
use PHPUnit\Framework\TestCase;

final class GramsTest extends TestCase
{
    use GramsTestData;

    /**
     * How to initialize mass in grams
     * @test
     */
    public function initializeWeightInGrams() : void
    {
        $measurement = 1;

        $weight = Weight::inGrams($measurement);

        $this->assertEquals($measurement, $weight->value());
        $this->assertEquals(Symbol::GRAMS, $weight->unit());
    }

    /**
     * @test
     * @dataProvider gramsToKilos
     * @param float $measurement
     * @param string $expected
     */
    public function convertToKilo(float $measurement, string $expected) : void
    {
        $weight = Weight::inGrams($measurement);

        $this->assertEquals($expected, $weight->toKilo());
    }
}
