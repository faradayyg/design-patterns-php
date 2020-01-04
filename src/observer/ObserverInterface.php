<?php
namespace App\Observer;


/**
 * The interface for the Observers
 * 
 * @category Interface
 * 
 * @package Observer\ObserverInterface
 * 
 * @author Friday G <faradayyg@gmail.com>
 * 
 * @license MIT https://opensource.org/licenses/MIT
 * 
 * @version Release: 1.0
 * 
 * @link I dunno what you should be
 */
interface ObserverInterface
{
    /**
     * The update method
     * 
     * @param array $data The data to be received by class
     * 
     * @return void
     */
    public function update(array $data);
}
