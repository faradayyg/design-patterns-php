<?php
namespace App\Decorator;

use App\Decorator\Consumable;

class WhiteRice extends Consumable
{
    public function __construct()
    {
        $this->description = "White Rice";        
    }
    public function cost()
    {
        return 300;
    }
}