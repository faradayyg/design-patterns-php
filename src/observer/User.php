<?php
namespace App\Observer;

use App\Observer\ObserverInterface;
use App\Observer\ObservableInterface;

/**
 * The User observer class
 * 
 * @category Class
 * 
 * @package Observer\User
 * 
 * @author Friday G <faradayyg@gmail.com>
 * 
 * @license MIT https://opensource.org/licenses/MIT
 * 
 * @version Release: 1.0
 * 
 * @link I dunno what you should be
 */
class User implements ObserverInterface
{
    public static $signature = 'user';

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
     * @inheritdoc
     */
    public function update(array $data)
    {
        print "User class has been updated with the following data: ". json_encode($data). "\n";
    }
}
