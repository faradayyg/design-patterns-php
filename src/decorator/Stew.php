<?php
namespace App\Decorator;

use App\Decorator\CondimentDecorator;
use App\Decorator\Consumable;

/**
 * @inheritdoc
 */
class Stew extends CondimentDecorator
{
    // When typed properties get introduced, this should be
    // of type App\Decorator\Consumable
    public $consumable;

    public function __construct(Consumable $consumable)
    {
        $this->consumable = $consumable;
        $this->description = $consumable->description . ", Stew";
    }

    public function cost()
    {
        return 100 + $this->consumable->cost();
    }

}