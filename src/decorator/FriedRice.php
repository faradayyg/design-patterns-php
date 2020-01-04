<?php
namespace App\Decorator;

use App\Decorator\Consumable;

class FriedRice extends Consumable
{

    /**
     * The constructor method
     * This sets the description of the food on init
     * 
     * @return void
     */
    public function __construct()
    {
        $this->description = "Fried Rice";
    }

    /**
     * @inheritdoc
     */
    public function cost()
    {
        return 400;
    }
}