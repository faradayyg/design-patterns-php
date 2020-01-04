<?php

require '../../vendor/autoload.php';

use App\Observer\Bank;
use App\Observer\User;
use App\Observer\Cashier;

$bank = Bank::newInstance();
$user = new User($bank);
$cashier = new Cashier($bank);
$bank->listAllRegisteredObservers();

$bank->notifyObservers(["balance" => 2000]);
$bank->deregisterObserver($user);

$bank->listAllRegisteredObservers();
