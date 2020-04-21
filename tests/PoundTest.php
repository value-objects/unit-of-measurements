<?php

declare(strict_types=1);

namespace CodingMatters\UoMTest;

use CodingMatters\UoM\Symbol;
use CodingMatters\UoM\Weight;
use PHPUnit\Framework\TestCase;

final class PoundTest extends TestCase
{
    /**
     * @test
     */
    public function initializedWeightInPound() : void
    {
        $measurement = 250;

        $weight = Weight::inPounds($measurement);

        $this->assertEquals($measurement, $weight->value());
        $this->assertEquals(Symbol::POUNDS, $weight->unit());
        $this->assertEquals("250 lbs", $weight);
    }
}
