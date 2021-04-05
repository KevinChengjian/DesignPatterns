<?php

namespace DesignPatterns\Singleton;


/**
 * Class Singleton
 */
class Singleton
{
    /**
     * @var array
     */
    private static $instances = [];

    /**
     * Singleton constructor.
     */
    protected function __construct()
    {
    }

    /**
     * Singletons should not be cloneable
     */
    protected function __clone()
    {
    }

    /**
     * Called when unserialize is executed,
     * The singletons should not be restorable from strings
     */
    protected function __wakeup()
    {
        throw new \Exception('Connot unserialize a singleton');
    }

    /**
     * Getting the global instance
     *
     * @return $this
     */
    public static function getInstance(): Singleton
    {
        $staticClass = static::class;

        if (!isset(self::$instances[$staticClass])) {
            self::$instances[$staticClass] = new static();
        }

        return self::$instances[$staticClass];
    }
}