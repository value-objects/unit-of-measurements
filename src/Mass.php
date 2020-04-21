<?php

declare(strict_types=1);
namespace CodingMatters\UoM;

use CodingMatters\UoM\Mass\Grams;

final class Mass
{
    public static function inGrams(float $measurement)
    {
        return new Grams($measurement);
    }
}
