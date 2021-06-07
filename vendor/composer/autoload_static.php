<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit860cece7da4c0239937c28ada64f535f
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DemoApp\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DemoApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit860cece7da4c0239937c28ada64f535f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit860cece7da4c0239937c28ada64f535f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit860cece7da4c0239937c28ada64f535f::$classMap;

        }, null, ClassLoader::class);
    }
}