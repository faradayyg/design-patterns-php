<?php
namespace Observer;

use Observer\ObserverInterface;

/**
 * The User class
 */
class User implements ObserverInterface
{
    public static $signature = 'user';
    
    /**
     * @inheritdoc
     */
    public function update(array $data)
    {
        print "User class has been updated with the following data: ". json_encode($data). "\n";
    }
}
