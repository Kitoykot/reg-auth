<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit122a63cbc25a2c1980f7cc7cd877ccb6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AuthApp\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AuthApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/auth-app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit122a63cbc25a2c1980f7cc7cd877ccb6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit122a63cbc25a2c1980f7cc7cd877ccb6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit122a63cbc25a2c1980f7cc7cd877ccb6::$classMap;

        }, null, ClassLoader::class);
    }
}
