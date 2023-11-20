<?php

declare(strict_types=1);

namespace App;

abstract class AbstractGadget
{
    abstract public function apply(float $multiplier, int $value);
}