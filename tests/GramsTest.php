<?php

declare(strict_types=1);

namespace CodingMatters\UoMTest;

use CodingMatters\UoM\Mass;
use CodingMatters\UoMTest\Fixtures\GramsTestData;
use PHPUnit\Framework\TestCase;

final class GramsTest extends TestCase
{
    use GramsTestData;

    /**
     * How to initialize mass in grams
     * @test
     */
    public function initializeUnit() : void
    {
        $measurement = 1;

        $grams = Mass::inGrams($measurement);

        $this->assertEquals("{$measurement} g", $grams);
    }

    /**
     * @test
     * @dataProvider gramsToKilos
     * @param float $measurement
     * @param string $expected
     */
    public function convertToKilo(float $measurement, string $expected) : void
    {
        $grams = Mass::inGrams($measurement);
        $this->assertEquals($expected, $grams->toKilo());
    }
}
