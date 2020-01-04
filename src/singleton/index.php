<?php

require '../../vendor/autoload.php';

use App\Singleton\SingletonClass;

try {
    $singleton = new SingletonClass();
} catch (\Throwable $e) {
    echo "Class cannot be instantiated through constructors";
}

$singleton = SingletonClass::createInstance();

$singleton2 = SingletonClass::createInstance();

if ($singleton2->getSignature() == $singleton->getSignature()) {
    echo "\n Signatures match, same class instance \n";
}
