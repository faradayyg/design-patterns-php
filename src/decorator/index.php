<?php

require '../../vendor/autoload.php';

use App\Decorator\{Meat, Stew, FriedRice, Vegetable};

// Fried Rice with double stew 

$friedRice = new FriedRice();

$stew = new Stew($friedRice);


$meat = new Meat($stew);

$veggies = new Vegetable($meat);

$veggies->getDescription();
echo "\n";

echo $veggies->cost()."\n";
