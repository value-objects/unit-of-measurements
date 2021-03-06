<?php

declare(strict_types=1);

namespace CodingMatters\UoM\Mass;

use CodingMatters\UoM\Helpers\ToString;
use CodingMatters\UoM\Helpers\WithUnit;
use CodingMatters\UoM\Helpers\WithValue;
use CodingMatters\UoM\Measurement;
use CodingMatters\UoM\Symbol;

final class Grams
{
    use WithUnit;
    use WithValue;
    use ToString;

    public function __construct(float $measure, string $symbol = Symbol::GRAMS)
    {
        $this->measure = $measure;
        $this->symbol = $symbol;

        return $this;
    }

    public function toKilo() : self
    {
        $this->measure /= Measurement::KILO;
        $this->symbol = Symbol::KILOGRAMS;

        return $this;
    }
}
