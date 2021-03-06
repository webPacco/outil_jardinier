<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf645b371b3fb94b64338eee85f366366
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'outiljardinage\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'outiljardinage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf645b371b3fb94b64338eee85f366366::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf645b371b3fb94b64338eee85f366366::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf645b371b3fb94b64338eee85f366366::$classMap;

        }, null, ClassLoader::class);
    }
}
