<?php

declare(strict_types=1);

namespace App;

final class DoubleGadget extends AbstractGadget
{
    public function apply(float $multiplier = 2.0, int $value): float
    {
        return $value * 2;
    }
}