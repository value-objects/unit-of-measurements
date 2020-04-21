<?php

namespace CodingMatters\UoM\Helpers;

trait WithValue
{
    private $measure;

    public function value() : float
    {
        return $this->measure;
    }
}
