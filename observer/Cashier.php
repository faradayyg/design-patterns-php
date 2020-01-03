<?php
namespace Observer;

use Observer\ObserverInterface;

/**
 * The Cashier class
 */
class Cashier implements ObserverInterface
{
    public static $signature = 'cashier';
    
    /**
     * The Update method
     * 
     * @param array $data the data transmitted to the method
     * 
     * @return void
     */
    public function update(array $data)
    {
        print "Cashier class has been updated with the following data: ". json_encode($data). "\n";
    }
}
