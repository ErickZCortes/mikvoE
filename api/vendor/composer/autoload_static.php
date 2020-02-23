<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b06d946688dbe25583cc8a8c7d64242
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'fa3df3013f51e030ec6f48c5e17462d5' => __DIR__ . '/..' . '/lindelius/php-jwt/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'L' => 
        array (
            'Lindelius\\JWT\\' => 14,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Lindelius\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lindelius/php-jwt/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
            'PEAR2\\Net\\Transmitter\\' => 
            array (
                0 => __DIR__ . '/..' . '/pear2/net_routeros/vendor/pear2/net_transmitter/src',
                1 => __DIR__ . '/..' . '/pear2/net_transmitter/src',
            ),
            'PEAR2\\Net\\RouterOS\\' => 
            array (
                0 => __DIR__ . '/..' . '/pear2/net_routeros/src',
            ),
            'PEAR2\\Console\\Color' => 
            array (
                0 => __DIR__ . '/..' . '/pear2/net_routeros/vendor/pear2/console_color/src',
            ),
            'PEAR2\\Cache\\SHM' => 
            array (
                0 => __DIR__ . '/..' . '/pear2/net_routeros/vendor/pear2/cache_shm/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b06d946688dbe25583cc8a8c7d64242::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b06d946688dbe25583cc8a8c7d64242::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2b06d946688dbe25583cc8a8c7d64242::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
