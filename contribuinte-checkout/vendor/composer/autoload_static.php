<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita246134c7b00af99cda40bf745b28aad
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Checkout\\Contribuinte\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Checkout\\Contribuinte\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita246134c7b00af99cda40bf745b28aad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita246134c7b00af99cda40bf745b28aad::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}