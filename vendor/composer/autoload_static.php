<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb8f9ebef051486497b8aed0ad7642ca
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb8f9ebef051486497b8aed0ad7642ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb8f9ebef051486497b8aed0ad7642ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteb8f9ebef051486497b8aed0ad7642ca::$classMap;

        }, null, ClassLoader::class);
    }
}
