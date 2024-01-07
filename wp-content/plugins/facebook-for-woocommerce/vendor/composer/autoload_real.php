<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3d7774d538e81ae7af0b6c372f4b5dab
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

        spl_autoload_register(array('ComposerAutoloaderInit3d7774d538e81ae7af0b6c372f4b5dab', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3d7774d538e81ae7af0b6c372f4b5dab', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3d7774d538e81ae7af0b6c372f4b5dab::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
