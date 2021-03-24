<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ea5a7815d9c1382492b9d803423d288
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ea5a7815d9c1382492b9d803423d288::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ea5a7815d9c1382492b9d803423d288::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ea5a7815d9c1382492b9d803423d288::$classMap;

        }, null, ClassLoader::class);
    }
}