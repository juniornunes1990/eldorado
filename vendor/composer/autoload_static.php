<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee0b4155909b495fa3ea382f8ea945fd
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/hcodebr/php-classes/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitee0b4155909b495fa3ea382f8ea945fd::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}