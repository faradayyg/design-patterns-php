<?php
namespace App\Decorator;
use App\Decorator\Consumable;

/**
 * @inheritdoc
 */
abstract class CondimentDecorator extends Consumable
{

    public $consumable;
    
    /**
     * This returns the description of the food ensamble
     * 
     * @return string
     */
    public function getDescription()
    {
        echo $this->description;
    }
}