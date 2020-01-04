<?php

namespace App\Decorator;

use App\Decorator\CondimentDecorator;
use App\Decorator\Consumable;

class Meat extends CondimentDecorator
{
    public function __construct(Consumable $consumable)
    {
        $this->consumable = $consumable;
        $this->description = $consumable->description. ", Meat";
    }

    public function cost()
    {
        return 200 + $this->consumable->cost();
    }
}