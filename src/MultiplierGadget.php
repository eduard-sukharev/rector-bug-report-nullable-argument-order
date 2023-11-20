<?php

declare(strict_types=1);

namespace App;

final class MultiplierGadget extends AbstractGadget
{
    public function apply(float $multiplier, int $value)
    {
        return $value * $multiplier;
    }
}