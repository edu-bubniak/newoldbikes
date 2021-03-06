<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb432fe02f290bb4b77c9b26241338975
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Oldbikes\\Loja\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Oldbikes\\Loja\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb432fe02f290bb4b77c9b26241338975::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb432fe02f290bb4b77c9b26241338975::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb432fe02f290bb4b77c9b26241338975::$classMap;

        }, null, ClassLoader::class);
    }
}
