<?php

include '../vendor/autoload.php';

use Observer\Bank;
use Observer\User;
use Observer\Cashier;

$bank = Bank::newInstance();
$user = new User();
$cashier = new Cashier();

$bank->registerObserver($user);
$bank->registerObserver($cashier);
$bank->notifyObservers(["balance" => 2000]);
$bank->deregisterObserver($user);
