<?php

declare(strict_types=1);

namespace CodingMatters\UoM\Helpers;

trait WithUnit
{
    private $symbol;

    public function unit() : string
    {
        return $this->symbol;
    }
}
