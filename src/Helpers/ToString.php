<?php

namespace CodingMatters\UoM\Helpers;

trait ToString
{
    public function __toString()
    {
        return "{$this->measure} {$this->symbol}";
    }
}
