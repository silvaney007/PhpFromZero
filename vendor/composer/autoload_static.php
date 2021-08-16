<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37a953022f82e256ab7ce02d0d0f7b4e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpFromZero\\' => 12,
        ),
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpFromZero\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit37a953022f82e256ab7ce02d0d0f7b4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37a953022f82e256ab7ce02d0d0f7b4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37a953022f82e256ab7ce02d0d0f7b4e::$classMap;

        }, null, ClassLoader::class);
    }
}