<?php

declare(strict_types=1);

namespace CodingMatters\UoMTest\Fixtures;

trait GramsTestData
{
    public function gramsToKilos() : array
    {
        return [
            "1000-grams" => [
                1000,
                "1 kg",
            ],
            "500-grams" => [
                500,
                "0.5 kg",
            ],
            "2500-grams" => [
                2500,
                "2.5 kg",
            ],
        ];
    }
}
