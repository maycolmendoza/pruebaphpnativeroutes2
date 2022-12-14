<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb89a12e82a62940bd7dce89a09c193f9
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EasyProjects\\SimpleRouter\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EasyProjects\\SimpleRouter\\' => 
        array (
            0 => __DIR__ . '/..' . '/easy-projects/simple-router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb89a12e82a62940bd7dce89a09c193f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb89a12e82a62940bd7dce89a09c193f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb89a12e82a62940bd7dce89a09c193f9::$classMap;

        }, null, ClassLoader::class);
    }
}
