<?php

namespace App\Decorator;

/**
 * The Consumable class signifies anything that can be eaten
 * 
 * @category Abstract
 * 
 * @package App\Decorator\Consumable
 * 
 * @author Friday Godswill <faradayyg@gmail.com>
 * 
 * @license MIT http://opensourcelicenses.org/MIT
 * 
 * @version Release: 1.0
 * 
 * @link I still do not know
 */
abstract class Consumable
{
    public $description = "Consumable food";

    /**
     * This returns the cost of the consumable
     * Abstract because it should be implemented by all inheriting classes
     * 
     * @return float
     */
    abstract public function cost();

    /**
     * Sets the description of the consumable
     * 
     * @param string $description the new description
     * 
     * @return void
     */
    public function setDescritpion(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the description of the consumable
     * 
     * @return void
     */
    public function getDescritpion()
    {
        echo $this->description;
    }
}