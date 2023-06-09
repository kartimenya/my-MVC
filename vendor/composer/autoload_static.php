<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7005d27ec8e06972d3598da16700285
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7005d27ec8e06972d3598da16700285::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7005d27ec8e06972d3598da16700285::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7005d27ec8e06972d3598da16700285::$classMap;

        }, null, ClassLoader::class);
    }
}
