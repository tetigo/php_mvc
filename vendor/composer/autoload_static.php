<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f7c9013fa9e55fffff43e6c572e79a7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f7c9013fa9e55fffff43e6c572e79a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f7c9013fa9e55fffff43e6c572e79a7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
