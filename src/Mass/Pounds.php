<?php

declare(strict_types=1);

namespace CodingMatters\UoM\Mass;

use CodingMatters\UoM\Helpers\ToString;
use CodingMatters\UoM\Helpers\WithUnit;
use CodingMatters\UoM\Helpers\WithValue;
use CodingMatters\UoM\Symbol;

final class Pounds
{
    use WithUnit;
    use WithValue;
    use ToString;

    public function __construct(float $measure, string $symbol = Symbol::POUNDS)
    {
        $this->measure = $measure;
        $this->symbol = $symbol;

        return $this;
    }
}
