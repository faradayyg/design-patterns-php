<?php
namespace App\Singleton;

class SingletonClass
{
    protected static $instance;
    protected static $signature;

    /**
     * Private Constructor for the class
     * 
     * @return void
     */
    private function __construct()
    {
        self::$signature = sha1(rand(10, 999));
    }

    /**
     * Method that instantiates class
     * 
     * @return SingletonClass
     */
    public static function createInstance()
    {
        if (!static::$instance  instanceof self) {
            static::$instance = new SingletonClass();
        }
        return static::$instance;
    }

    /**
     * Method that returns the signature of the class
     * 
     * @return integer
     */
    public function getSignature()
    {
        return self::$signature;
    }
}