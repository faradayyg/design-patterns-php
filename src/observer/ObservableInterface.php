<?php
namespace App\Observer;

use App\Observer\ObserverInterface as OB;

interface ObservableInterface
{
    public function registerObserver(OB $observer);

    public function deregisterObserver(OB $observer);

    public function notifyObservers(array $data);
}
