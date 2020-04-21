<?php

declare(strict_types=1);

namespace CodingMatters\UoM\Mass;

final class Grams
{
    private $number;
    private $symbol;

    public function __construct(float $number, string $symbol = 'g')
    {
        $this->number = $number;
        $this->symbol = $symbol;

        return $this;
    }

    public function toKilo() : self
    {
        $this->number /= 1000;
        $this->symbol = "kg";

        return $this;
    }

    public function __toString()
    {
        return "{$this->number} {$this->symbol}";
    }
}
