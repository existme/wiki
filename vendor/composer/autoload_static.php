<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit545cd62018552957a10a40c0ea43dcb7
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

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-markdown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit545cd62018552957a10a40c0ea43dcb7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit545cd62018552957a10a40c0ea43dcb7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit545cd62018552957a10a40c0ea43dcb7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}