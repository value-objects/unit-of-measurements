<?php

declare(strict_types=1);
namespace CodingMatters\UoM;

use CodingMatters\UoM\Mass\Grams;
use CodingMatters\UoM\Mass\Pounds;

final class Weight
{
    public static function inGrams(float $value)
    {
        return new Grams($value);
    }

    public static function inPounds(float $value)
    {
        return new Pounds($value);
    }
}
