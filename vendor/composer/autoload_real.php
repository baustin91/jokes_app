<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit20aab4f3b5107f0d59c73cb60accf9cb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit20aab4f3b5107f0d59c73cb60accf9cb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit20aab4f3b5107f0d59c73cb60accf9cb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit20aab4f3b5107f0d59c73cb60accf9cb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
