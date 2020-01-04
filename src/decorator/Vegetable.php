<?php 
namespace App\Decorator;
use App\Decorator\CondimentDecorator;
use App\Decorator\Consumable;

class Vegetable extends CondimentDecorator
{
    /**
     * The class constructor
     * 
     * @return void
     */
    public function __construct(Consumable $consumable)
    {
        $this->consumable = $consumable;
        $this->description = $consumable->description . ", Veggies";
    }

    /**
     * @inheritdoc
     */
    public function cost()
    {
        return 50 + $this->consumable->cost();
    }
}