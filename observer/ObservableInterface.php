<?php
namespace Observer;

use Observer\ObserverInterface as OB;

interface ObservableInterface
{
    public function registerObserver(OB $observer);

    public function deregisterObserver(OB $observer);

    public function notifyObservers(array $data);
}
