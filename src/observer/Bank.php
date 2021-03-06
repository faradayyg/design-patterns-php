<?php
/**
 * The Bank Class that implements the Observable interface
 */
 namespace App\Observer;

 use App\Observer\ObservableInterface;
 use App\Observer\ObserverInterface;

/**
 * The Bank class
 * This is a singleton class
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
class Bank implements ObservableInterface
{
    protected static $instance = null;
    protected static $observers = [];

    /**
     * Made private to prevent class instantiation from outside
     */
    private function __construct()
    {
        // Do not allow class construction
    }

    /**
     * Instantiate new instance of class or return old instance.
     * 
     * @return self
     */
    public static function newInstance()
    {
        if (static::$instance == null) {
            static::$instance = new Bank();
        }
        return static::$instance;
    }

    /**
     * Register a new observer to the observable
     * 
     * @param ObserverInterface $o the observer to be registered
     * 
     * @return void
     */
    public function registerObserver(ObserverInterface $o)
    {
        array_push(self::$observers, $o);
    }

    /**
     * Remove an observer from the observable
     * 
     * @param ObserverInterface $o the observer to be removed
     * 
     * @return void
     */
    public function deRegisterObserver(ObserverInterface $o)
    {
        $newObserversArray = [];
        foreach (static::$observers as $observer) {
            if ($observer !== $o) {
                array_push($newObserversArray, $observer);
            }
        }
        self::$observers = $newObserversArray;
    }

    /**
     * Notify all registered observers of event
     * 
     * @param array $data data to be transmitted to observers
     * 
     * @return void
     */
    public function notifyObservers(array $data)
    {
        foreach (static::$observers as $observer) {
            $observer->update($data);
        }
    }

    /**
     * This returns a list of all the registered observers
     * 
     * @return void
     */
    public function listAllRegisteredObservers()
    {
        echo "============= \n All Registered observers \n=========== \n";
        foreach (static::$observers as $observer) {
            try {
                echo "Class Signature => ". $observer::$signature . "\n";
            } catch (\Exception $e) {
                echo "Class signature not found.";
            }

            var_dump($observer);
        }
    }
}
