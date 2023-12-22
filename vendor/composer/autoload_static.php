<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb48a0e1b90cee87d2eefc6d04e44d9b7
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Root\\Design\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Root\\Design\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb48a0e1b90cee87d2eefc6d04e44d9b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb48a0e1b90cee87d2eefc6d04e44d9b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb48a0e1b90cee87d2eefc6d04e44d9b7::$classMap;

        }, null, ClassLoader::class);
    }
}