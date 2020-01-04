<?php
namespace App\Observer;

use App\Observer\ObserverInterface;
use App\Observer\ObservableInterface;

/**
 * The Cashier class
 * 
 * @category Class
 * 
 * @package Observer\Cashier
 * 
 * @author Friday G <faradayyg@gmail.com>
 * 
 * @license MIT https://opensource.org/licenses/MIT
 * 
 * @version Release: 1.0
 * 
 * @link I dunno what you should be
 */
class Cashier implements ObserverInterface
{
    public static $signature = 'cashier';

    /**
     * Constructor for the observer class
     * 
     * @param ObservableInterface $ob the observable to be registered to
     * 
     * @return void
     */
    public function __construct(ObservableInterface $ob)
    {
        $ob->registerObserver($this);
    }
    
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
